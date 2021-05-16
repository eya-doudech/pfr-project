<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $this->data['categories'] = Categorie::latest()->paginate(5); /*modele*/
        return view ('categories.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['families'] = ['Corporelle','Incorporelle','Financière'];
        return view ('categories.create',$this->data);
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
            'designation'=>'required',
            'famille'=>'required',

            
        ]);
        Categorie::create($request->all());
        return redirect()->route('categories.index')->with('success', 'categorie bien ajouté'); /* ki nzid donnée yhezni lel p index */ 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('categories.show', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['families'] = ['Corporelle','Incorporelle','Financière'];
        $this->data['categorie'] = Categorie::findOrFail($id);
        return view('categories.edit', $this->data);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $input = $request->all();
        $categorie->fill($input);

        $categorie->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        return response()->json(["success"=>true]);
    }
    public function trash()
    {
        $this->data['trashed_categories'] = Categorie::onlyTrashed()->get();
        return view('categories.trash',$this->data);
    }
    public function history()
    {
        $this->data['categories'] = Categorie::withTrashed()->get();
        foreach($this->data['categories'] as $key=>$item)
        {
            if(!empty($item->deleted_at)){
                $item->status = 1;
            }else{
                $item->status = 0;
            }
        }
        return view('categories.history',$this->data);
    }
    public function restore($id)
    {
        Categorie::withTrashed()->where('id',$id)->restore();
        return response()->json(['success'=>true]);
    }
}

