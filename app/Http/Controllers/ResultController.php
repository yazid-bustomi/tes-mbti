<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Question;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $idUser = Auth::user()->id;
            $userResult = Result::where('user_id', $idUser)->get();

            View::share('userResult', $userResult);
        }else{
            View::share('userResult', null);
        }

        $userId = Auth::user()->id;
        $userResult = Result::where('user_id', $userId)->with('dimension')->get();
        foreach($userResult as $result){
            $result;
        }
        return view('menu.result', compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Add variable dimensi
        $userId = Auth::user()->id;
        $userResult = Result::where('user_id' , $userId)->get();
        $dimensionE = 0;
        $dimensionI = 0;
        $dimensionN = 0;
        $dimensionS = 0;
        $dimensionT = 0;
        $dimensionF = 0;
        $dimensionJ = 0;
        $dimensionP = 0;

        // Menentukan hasil dimensi dan looping setiap datanya
        foreach ($request->answers as $data) {
            if (isset($data['E/I']) && ($data['E/I'] == 'yes')) {
                $dimensionE++;
            } elseif (isset($data['E/I']) && ($data['E/I'] == 'no')) {
                $dimensionI++;
            }

            if (isset($data['N/S']) && ($data['N/S'] == 'yes')) {
                $dimensionN++;
            } elseif (isset($data['N/S']) && ($data['N/S'] == 'no')) {
                $dimensionS++;
            }

            if (isset($data['T/F']) && ($data['T/F'] == 'yes')) {
                $dimensionT++;
            } elseif (isset($data['T/F']) && ($data['T/F'] == 'no')) {
                $dimensionF++;
            }

            if (isset($data['J/P']) && ($data['J/P'] == 'yes')) {
                $dimensionJ++;
            } elseif (isset($data['J/P']) && ($data['J/P'] == 'no')) {
                $dimensionP++;
            }
        }

        // Concat dimensi menentukan 4 dimensi
        $mbtiResult = '';
        $mbtiResult .= ($dimensionE >= $dimensionI) ? 'E' : 'I';
        $mbtiResult .= ($dimensionN >= $dimensionS) ? 'N' : 'S';
        $mbtiResult .= ($dimensionT >= $dimensionF) ? 'T' : 'F';
        $mbtiResult .= ($dimensionJ >= $dimensionP) ? 'J' : 'P';

        // menghitung jumlah seluruh dimensi
        $mbtiResultE = round(($dimensionE / 15) * 100);
        $mbtiResultI = round(($dimensionI / 15) * 100);
        $mbtiResultN = round(($dimensionN / 15) * 100);
        $mbtiResultS = round(($dimensionS / 15) * 100);
        $mbtiResultT = round(($dimensionT / 15) * 100);
        $mbtiResultF = round(($dimensionF / 15) * 100);
        $mbtiResultJ = round(($dimensionJ / 15) * 100);
        $mbtiResultP = round(($dimensionP / 15) * 100);

        // untuk search dimensi dari 4 kata diatas yang di ambul dari result concat
        $searchDimensi = Dimension::where('dimension', 'like', "{$mbtiResult}%")->get();

        // input data ketika sudah ketemu datanya dari database
        if($searchDimensi->isEmpty()){
            return redirect()->back()->with('error', 'Data Tidak Di Temukan');
        }else{
            // jika masih kosong maka input datanya
            if($userResult->isEmpty()){
                DB::table('results')->insert([
                    'user_id' => $userId,
                    'dimension_id' => $searchDimensi->first()->id,
                    'result_type' => $mbtiResult,
                    'introved' => $mbtiResultI,
                    'extroverted' => $mbtiResultE,
                    'intuition' => $mbtiResultN,
                    'sensing' => $mbtiResultS,
                    'thinking' => $mbtiResultT,
                    'judging' => $mbtiResultJ,
                    'feeling' => $mbtiResultF,
                    'perceiving' => $mbtiResultP,
                ]);
                // jika sudah pernah maka update datanya
            }else{
                foreach($userResult as $data){
                    $data->dimension_id = $searchDimensi->first()->id;
                    $data->result_type = $mbtiResult;
                    $data->introved = $mbtiResultI;
                    $data->extroverted = $mbtiResultE;
                    $data->intuition = $mbtiResultN;
                    $data->sensing = $mbtiResultS;
                    $data->thinking = $mbtiResultT;
                    $data->judging = $mbtiResultJ;
                    $data->feeling = $mbtiResultF;
                    $data->perceiving = $mbtiResultP;
                    $data->save();
                }
            }
            return redirect()->route('result.index')->with('success', 'Tes MBTI Berhasil');
        }
    }

   
}
