<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    /**
     * ログイン画面を表示する
     * 
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        
        if ($user) {
            // ログインしている場合トップ画面を表示する
            return redirect()->route('top');
        }

        // ログインしていない場合、ログインページを表示する
        return view('login.index');
    }

    /**
     * ログイン認証する
     * 
     * @param Request $request
     * @return void
     */
    public function login(Request $request)
    {
        if(Auth::attempt($request->only("email","password"))){
            return view('top.index');
        }
        
        // ログインしていない場合、ログインページを表示する
        return view('login.index');
    }
}
