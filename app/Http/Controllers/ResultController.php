<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('result');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $searchDimensi = Dimension::where('dimension', 'like', "{$mbtiResult}%")->get();
        if($searchDimensi->isEmpty()){
            return redirect()->back()->with('error', 'Data Tidak Di Temukan');
        }else{
            dd($searchDimensi->first()->id);

            // kalau menemukan maka masuk ke dalam else ini
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
