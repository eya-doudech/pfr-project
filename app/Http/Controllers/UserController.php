<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
 


class UserController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    function auth(Request $request)
    {
        $user= User::where('login', $request->login)->first();
        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 202);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'login' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telephone' => ['required', 'string', 'max:255'],

        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['users'] = User::latest()->paginate(5); /*modele*/
        return view('users.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'nom' => 'required',
            'prenom' => 'required',
            'login' => 'required',
            'password' => 'required',
            'telephone' => 'required',
            'is_admin' => 'required'
        ]);

        // User::create($request->all());
        $user = new User();
        $user->password = Hash::make($request->password);
        $user->login = $request->login;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->telephone = $request->telephone;
        $user->is_admin = $request->is_admin;

        $user->save();
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
     * get User details
     */
    public function fetchUser(Request $request) {
        $this->validate($request, [
            'login' => 'required'
        ]);

        return User::query()
        ->where('login', $request->get('login'))
        ->get();
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
    public function update(Request $request, $id)
    {
            $user = User::findOrFail($id);
            $input = $request->all();

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
        $user->delete();
        return response()->json(["success" => true]);
    }
    public function trash()
    {
        $this->data['trashed_users'] = User::onlyTrashed()->get();
        return view('users.trash', $this->data);
    }
    public function history()
    {
        $this->data['users'] = User::withTrashed()->get();
        foreach ($this->data['users'] as $key => $item) {
            if (!empty($item->deleted_at)) {
                $item->status = 1;
            } else {
                $item->status = 0;
            }
        }
        return view('users.history', $this->data);
    }
    public function restore($id)
    {
        User::withTrashed()->where('id', $id)->restore();
        return response()->json(['success' => true]);
    }
}
