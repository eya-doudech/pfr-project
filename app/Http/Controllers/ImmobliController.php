<?php

namespace App\Http\Controllers;

use App\Models\{Immobli, Departement, Categorie, User, Modification};
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Container\Container;
use Illuminate\Support\Collection;

class ImmobliController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['immobilisations'] = Immobli::latest()
            ->crossJoin('departements')
            ->crossJoin('categories')->crossJoin('users')
            ->select([
                "immoblis.*",
                "categories.designation as category",
                "departements.designation as departement",
                "users.prenom as prenom",

            ])
            ->get();
        $this->data['immobilisations'] = collect($this->data['immobilisations'])->keyBy('id');
        $ctgs = array();
        foreach ($this->data['immobilisations'] as $key => $values) :
            $ctgs[$values->codeAbar][] = $values->category;
        endforeach;
        $this->data['immobilisations'] = collect($this->data['immobilisations'])->keyBy('codeAbar');
        foreach ($this->data['immobilisations'] as $key => $values) :
            $values->category = implode(',', $ctgs[$key]);
        endforeach;
        $pageSize = 10;
        $this->data['immobilisations'] = $this->PaginationHelper($this->data['immobilisations'], $pageSize);

        return view('immobilisations.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['categories']   = Categorie::get();
        $this->data['departements'] = Departement::get();
        $this->data['users'] = User::get();
        return view('immobilisations.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codeAbar' => 'required',
            'designation' => 'required',
            'quantite' => 'required',
            'categorie_id' => 'required',
            'departement_id' => 'required',
            'user_id' => 'required',
            'dateDentree' => 'required',
            'dateDeSortie' => 'required'
        ]);
        $data = $request->all();
        foreach ($request->input('categorie_id') as $key => $item) :
            $data[$key] = [
                'codeAbar' => $request->input('codeAbar'),
                'designation' => $request->input('designation'),
                'quantite' => $request->input('quantite'),
                'categorie_id' => $item,
                'departement_id' => $request->input('departement_id'),
                'user_id' => $request->input('user_id'),
                'dateDentree' => $request->input('dateDentree'),
                'dateDeSortie' => $request->input('dateDeSortie')
            ];
            Immobli::create($data[$key]);

        endforeach;

        return redirect()->route('immobilisations.index')->with('success', 'Immobilisation bien ajout??e'); /* ki nzid donn??e yhezni le*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Immobli  $immobli
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $immonbilisation = Immobli::findOrFail($id);
        return view('immobilisations.show', compact('immobilisation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Immobli  $immobli
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['categories']   = Categorie::get();
        $this->data['departements'] = Departement::get();
        $this->data['users'] = User::get();

        $this->data['immobilisation'] = Immobli::findOrFail($id);
        return view('immobilisations.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Immobli  $immobli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $immobilisation = Immobli::findOrFail($id);
        $input = $request->all();
        // dd($immobilisation);

        // Saving modifications history
        foreach ($input as $key => $item) {
            // var_dump($item);
            if ($key !== "_method" && $key !== "_token") {
                if ((string)$immobilisation[$key] !== $item) {
                    $data_row = [
                        'immobli_id' => $id,
                        'modified_attribute' => $key,
                        'old_val' => $immobilisation[$key],
                        'new_val' => $item
                    ];
                    // dd($data_row);

                    Modification::create($data_row);
                }
            }
        }

        $immobilisation->fill($input);

        $immobilisation->save();
        return redirect()->route('immobilisations.index');
    }

    public function modifications()
    {
        // $this->data['categories']   = Categorie::get();
        // $this->data['departements'] = Departement::get();
        // $this->data['users'] = User::get();
        $this->data['modifications'] = Modification::get();
        // dd($this->data['modifications']);
        return view('modifications.index', $this->data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Immobli  $immobli
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $immobilisation = Immobli::find($id);
        $immobilisation->delete();
        return response()->json(["success" => true]);
    }
    public function trash()
    {
        $this->data['trashed_immobilisations'] = Immobli::onlyTrashed()->get();
        return view('immobilisations.trash', $this->data);
    }
    public function history()
    {
        $this->data['immobilisation'] = Immobli::withTrashed()->get();
        foreach ($this->data['immobilisation'] as $key => $item) {
            if (!empty($item->deleted_at)) {
                $item->status = 1;
            } else {
                $item->status = 0;
            }
        }
        return view('immobilisations.history', $this->data);
    }
    public function restore($id)
    {
        Departement::withTrashed()->where('id', $id)->restore();
        return response()->json(['success' => true]);
    }

    public static function PaginationHelper(Collection $data, $perPage)
    {
        $page = Paginator::resolveCurrentPage('page');
        $total = $data->count();
        return self::paginator($data->forPage($page, $perPage), $total, $perPage, $page, [
            'path'      => Paginator::resolveCurrentPath(),
            'pageName'  => 'page',
        ]);
    }

    protected static function paginator($items, $total, $perPage, $currentPage, $options)
    {
        return Container::getInstance()->makeWith(LengthAwarePaginator::class, compact(
            'items',
            'total',
            'perPage',
            'currentPage',
            'options'
        ));
    }
}
