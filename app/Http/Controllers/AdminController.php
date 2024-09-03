<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreadminRequest;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $idUser = Auth::user()->id;
            $userResult = Result::where('user_id', $idUser)->get();

            View::share('userResult', $userResult);
        } else {
            View::share('userResult', null);
        }

        $users = User::where('role', 'mahasiswa')->with('mahasiswa', 'result')->get();
        $results = Result::all();

        return view('admin.index', compact('users', 'results'));
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
    public function store(StoreadminRequest $request)
    {
        try {
            /**
             * save ke database
             */
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            DB::table('mahasiswa')->insert([
                'user_id' => $user->id,
                'semester' => $request->semester,
                'jurusan' => $request->jurusan,
            ]);

            /**
             * jika semua transaksi ke database telah berhasil
             */
            Log::info('Success message sent');
            return redirect()->route('user.index')->with('success', 'User berhasil di tambahkan');
        } catch (\Throwable $th) {
            /**
             * Show log error with input database
             * rollback jika error dan mengembalikan errornya
             */
            Log::error($th);
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to create user');
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
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find data
        $user = User::findOrFail($id);
        $user->delete();
        // redirect with success
        return redirect()->route('user.index')->with('successDelete', 'Data Berhasil di Delete');
    }
}
