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
            // Mulai transaksi
            DB::beginTransaction();

            // Simpan user ke table users
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);

            // Simpan data mahasiswa ke table mahasiswa
            DB::table('mahasiswas')->insert([
                'user_id' => $user->id,
                'semester' => $request->semester,
                'jurusan' => $request->jurusan,
                'gender' => $request->gender,
                'birthdate' => $request->birthdate,
            ]);

            // Komit transaksi
            DB::commit();

            return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
        } catch (\Exception $e) {
            // Jika ada error, rollback dan tampilkan pesan error
            DB::rollBack();
            Log::error('Gagal menyimpan data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
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
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|unique:users,username,' . $id, // Mengecualikan user saat ini
            'jurusan' => 'nullable|string|max:255',
            'semester' => 'nullable|integer|min:1', // Semester minimal 1
            'gender' => 'nullable|string|in:laki-laki,perempuan', // Misalnya, gender harus salah satu dari ini
        ]);

        try {
            // Mulai transaction
            DB::beginTransaction();

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
                    'jurusan' => $request->jurusan ?? $mahasiswa->jurusan, // Tetap gunakan nilai lama jika null
                    'semester' => $request->semester ?? $mahasiswa->semester,
                    'gender' => $request->gender ?? $mahasiswa->gender,
                ]);
            }

            // Commit transaction
            DB::commit();

            return response()->json(['message' => 'User updated successfully']);
        } catch (\Exception $e) {
            // Rollback transaction jika ada error
            DB::rollBack();
            Log::error('Error updating user: ' . $e->getMessage());

            return response()->json(['error' => 'Gagal mengupdate data', 'message' => $e->getMessage()], 500);
        }
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
