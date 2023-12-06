<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
     {
         $this->validate($request, [
             'email' => 'required|email|exists:users,email|max:255',
             'password' => 'required',
         ]);
         $credentials = $request->only('email', 'password');
 
         if (Auth::attempt($credentials)) {
             $user = Auth::user();
 
             if ($user->role === 'admin') {
                 return redirect()->route('dashboardAdmin.index');
             } elseif ($user->role === 'user') {
                 return redirect()->route('home.index');
             } else {
                 // Role tidak dikenali, lakukan sesuatu sesuai kebijakan Anda
                 Auth::logout();
                 return back()->withErrors(['email' => 'Role tidak valid']);
             }
         } else {
             return back()->withErrors(['email' => 'Email atau password salah']);
         }
     }
 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
