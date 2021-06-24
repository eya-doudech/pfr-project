<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{



    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'login' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('login', 'password');
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            // salha 
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('notfound');
                // return 'Erreur, NotAdmin';
            }
        } else {

            //  return redirect()->route('login') ->with('error','login  And Password Are Wrong.');
            return 'Login And Password Are Wrong.';
        }
    }
}
