<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Product;
use Illuminate\Http\Request;
use App\User;

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

    // use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/home';

    // *
    //  * Create a new controller instance.
    //  *
    //  * @return void
     
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
    public function login(Request $request)
    {
        
            try {
                    $email=$request->post('username');
                    $password=$request->post('password');
                    $user=User::where('email','=',$email)->where('password','=',$password)->first();
                   
                    if($user->role=='admin')
                    {
                         return redirect()->route('admin');
                    }
                    else
                    {
                       return redirect()->route('product');
                    }
        } catch (Throwable $e) {
            report($e);

            return false;
        }



    }
    public function admin()
    {
        return view('admin');
    }
}
