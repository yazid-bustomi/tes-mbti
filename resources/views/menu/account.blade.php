@extends('layouts.master')


@section('header-start')
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Profile User</h4>
            <h5 class="d-flex justify-content-center mb-0 wow fadeInDown text-primary" data-wow-delay="0.3s"> </h5>
        </div>
    </div>
@endsection

@section('content')
<div class="container d-flex justify-content-center mt-5 mb-5 wow fadeInUp" ata-wow-delay="0.3s">
    <div class="card shadow-lg w-50">
        <div class="card-body">
            <form>
                @foreach ($users as $user)
                    
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $user->name }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="{{ $user->username }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="birthdate" class="form-label">Tanggal Lahir</label>
                    @foreach ($user->mahasiswa as $mahasiswa)
                    <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ $mahasiswa->birthdate }}" readonly>
                    @endforeach
                </div>

                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $mahasiswa->jurusan }}" readonly>
                    
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    @foreach ($user->mahasiswa as $mahasiswa)
                    <input type="text" class="form-control" id="gender" name="gender" value="{{ $mahasiswa->gender }}" readonly>
                    @endforeach
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" readonly>
                </div>
                @endforeach

                
                <div class="d-flex justify-content-center text-danger">
                    <small class="form-text text-danger">Silahkan hubungi admin untuk update data.</small>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection