<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TopController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * トップ画面を表示する
     * 
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user) {
            // ログインしている場合トップ画面を表示する
            return view('top.index');
        }

        // ログインしていない場合、ログインページを表示する
        return redirect()->route('login');
    }

}
