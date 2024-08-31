<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        if(Auth::check()){
            $idUser = Auth::user()->id;
            $userResult = Result::where('user_id', $idUser)->get();

            View::share('userResult', $userResult);
        }else{
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
    public function store(Request $request)
    {
        // validation
        $rules = [
            'name' => 'required',
            'email' => 'unique:users,email',
            'jurusan' => 'required',
            'semester' => 'required|numeric',
            'password' => 'required|min:8'
        ];

        $message = [
            'name.required' => 'Nama Wajib di Isi',
            'email.unique' => 'Email atau NIM sudah terdaftar',
            'jurusan.required' => 'Jurusan wajib di isi',
            'semester.required' => 'Semester wajib di isi',
            'semester.numeric' => 'Semester wajib berupa nangka',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password minimal 8 karakter'
        ];

        $validated = Validator::make($request->all(),$rules,$message);

        if($validated->fails()){
            return redirect()->back()->withErrors($validated)->withInput();
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        DB::table('mahasiswas')->insert([
            'user_id' => $user->id,
            'semester' => $request->semester,
            'jurusan' => $request->jurusan,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil di tambahkan');
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
        dd($id);
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
        // find data
        $user = User::findOrFail($id);
        $user->delete();
        // redirect with success
        return redirect()->route('user.index')->with('successDelete', 'Data Berhasil di Delete');
    }
}
