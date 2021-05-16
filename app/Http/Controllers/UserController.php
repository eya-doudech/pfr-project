<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['users'] = User::latest()->paginate(5); /*modele*/
        return view ('users.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('users.create') ;

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
            'nom'=>'required',
            'prenom'=>'required',
            'login'=>'required',
            'mot_de_passe'=>'required',
            'telephone'=>'required',
            'is_admin'=>'required'
        ]);

        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'Utilisateur bien ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['user'] = User::findOrFail($id);
        return view('users.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilisateurs $utilisateurs)
    {
        $user = User::findOrFail($id);
        $input = $request->all() ;

        $user->fill($input);

        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user>delete();
        return response()->json(["success"=>true]);
    }
    public function trash()
    {
        $this->data['trashed_users'] = User::onlyTrashed()->get();
        return view('users.trash',$this->data);
    }
    public function history()
    {
        $this->data['users'] = User::withTrashed()->get();
        foreach($this->data['users'] as $key=>$item)
        {
            if(!empty($item->deleted_at)){
                $item->status = 1;
            }else{
                $item->status = 0;
            }
        }
        return view('users.history',$this->data);
    }
    public function restore($id)
    {
        User::withTrashed()->where('id',$id)->restore();
        return response()->json(['success'=>true]);
    }
}