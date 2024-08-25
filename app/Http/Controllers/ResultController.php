<?php

namespace App\Http\Controllers;

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
        $userId = Auth::user()->id;
        $user = User::where('id', $userId)->with('answer', 'answer.question')->get();
        $dimensionE = 0;
        $dimensionI = 0;
        $dimensionN = 0;
        $dimensionS = 0;
        $dimensionT = 0;
        $dimensionF = 0;
        $dimensionJ = 0;
        $dimensionP = 0;

        foreach($user as $data){
            foreach ($data->answer as $result){
                $dimemnsi = $result->question->dimension;
                $answer = $result->answer;

                if($dimemnsi == 'E/I'){
                    if($answer == 'yes'){
                        $dimensionE++;
                    }elseif($answer == 'no'){
                        $dimensionI++;
                    }
                }elseif($dimemnsi == 'N/S'){
                    if($answer == 'yes'){
                        $dimensionN++;
                    }elseif($answer == 'no'){
                        $dimensionS++;
                    }
                }elseif($dimemnsi == 'T/F'){
                    if($answer == 'yes'){
                        $dimensionT++;
                    }elseif($answer == 'no'){
                        $dimensionF++;
                    }
                }elseif($dimemnsi == 'J/P'){
                    if($answer == 'yes'){
                        $dimensionJ++;
                    }elseif($answer == 'no'){
                        $dimensionP++;
                    }
                }
            }
        }

        $mbtiResult = '';
        $mbtiResult .= ($dimensionE >= $dimensionI) ? 'E' : 'I';
        $mbtiResult .= ($dimensionN >= $dimensionS) ? 'N' : 'S';
        $mbtiResult .= ($dimensionT >= $dimensionF) ? 'T' : 'F';
        $mbtiResult .= ($dimensionJ >= $dimensionP) ? 'J' : 'P';

        dd($mbtiResult);

        return view('tesdata', compact('user'));
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
        //
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
