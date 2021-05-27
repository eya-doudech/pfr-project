<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;


class DepartementController extends Controller
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

        $this->data['departements'] = Departement::latest()->paginate(5); /*modele*/
        return view('departements.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departements.create');
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
            'designation' => 'required',
            'localisation' => 'required',

        ]);

        Departement::create($request->all());
        return redirect()->route('departements.index')->with('success', 'Département bien ajouté'); /* ki nzid donnée yhezni le*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departement = Departement::findOrFail($id);
        return view('departements.show', compact('departement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['departement'] = Departement::findOrFail($id);
        return view('departements.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $departement = Departement::findOrFail($id);
        $input = $request->all();

        $departement->fill($input);

        $departement->save();
        return redirect()->route('departements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departement = Departement::find($id);
        $departement-> delete();
        return response()->json(["success" => true]);
    }
    public function trash()
    {
        $this->data['trashed_departements'] = Departement::onlyTrashed()->get();
        return view('departements.trash', $this->data);
    }
    public function history()
    {
        $this->data['departements'] = Departement::withTrashed()->get();
        foreach ($this->data['departements'] as $key => $item) {
            if (!empty($item->deleted_at)) {
                $item->status = 1;
            } else {
                $item->status = 0;
            }
        }
        return view('departements.history', $this->data);
    }
    public function restore($id)
    {
        Departement::withTrashed()->where('id', $id)->restore();
        return response()->json(['success' => true]);
    }
}
