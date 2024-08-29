<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View ;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dimensions = Dimension::all();
        if(Auth::check()){
            $idUser = Auth::user()->id;
            $userResult = Result::where('user_id', $idUser)->get();

            View::share('userResult', $userResult);
        }else{
            View::share('userResult', null);
        }

        return view('menu.home', compact('dimensions'));
    }
}
