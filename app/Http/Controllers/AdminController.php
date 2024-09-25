<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreadminRequest;
use App\Models\Mahasiswa;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreadminRequest $request)
    {
        try {
            // Simpan user ke table users
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);
    
            // Simpan data mahasiswa ke table mahasiswa
            DB::table('mahasiswa')->insert([
                'user_id' => $user->id,
                'semester' => $request->semester,
                'jurusan' => $request->jurusan,
                'gender' => $request->gender,
                'birthdate' => $request->birthdate,
            ]);
    
            return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
        } catch (\Exception $e) {
            Log::error('Gagal menyimpan data: ' . $e->getMessage());
    return redirect()->back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
    
            // Jika ada error, rollback dan tampilkan pesan error
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
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
        // dd()
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
        // Validasi input yang dikirimkan dari AJAX
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|unique:users,username,',
            'jurusan' => 'nullable|string',
            'semester' => 'nullable|integer',
            'gender' => 'nullable|string',
        ]);

        // Update data user
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
        ]);

        // Update data mahasiswa (jika ada)
        $mahasiswa = Mahasiswa::where('user_id', $id)->first();
        if ($mahasiswa) {
            $mahasiswa->update([
                'jurusan' => $request->jurusan,
                'semester' => $request->semester,
                'gender' => $request->gender,
            ]);
        }

        return response()->json(['message' => 'User updated successfully']);
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
