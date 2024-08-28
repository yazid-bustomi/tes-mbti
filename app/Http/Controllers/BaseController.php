<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        // jika tidak guest maka bisa memakai userResult untuk menampilkan hasil
        if(Auth::check()){
            $idUser = Auth::user()->id;
            $userResult = Result::where('user_id', $idUser)->get();

            View::share('userResult', $userResult);
        }else{
            View::share('userResult', null);
        }
    }
}
