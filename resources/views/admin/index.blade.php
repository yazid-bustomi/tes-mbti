@extends('layouts.master')

@section('style')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}"> --}}

    <!-- Data Table CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/data-table/bootstrap-editable.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
@endsection

@section('header-start')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Manajemen User</h4>
        </div>
    </div>
    <!-- Header End -->
@endsection


@section('content')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">

                    {{-- Add Mahasiswa --}}
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-5">
                        <div class="sparkline13-list rounded">
                            <div class="form-body">
                                <div class="row">
                                    <div class="form-holder">
                                        <div class="form-content">
                                            <div class="form-items">
                                                <h3>Tambah Mahasiswa</h3>
                                                @if (session('success'))
                                                    <div class="alert alert-success">
                                                        {{ session('success') }}
                                                    </div>
                                                @endif
                                                <form action="{{ route('user.store') }}" method="POST"
                                                    class="requires-validation" novalidate>
                                                    @csrf
                                                    <div class="col-md-12 mb-1">
                                                        <input
                                                            class="form-control rounded @error('name') is-invalid @enderror"
                                                            type="text" name="name" placeholder="Full Name"
                                                            value="{{ old('name') }}">
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-12 mb-1">
                                                        <input
                                                            class="form-control rounded @error('email') is-invalid @enderror"
                                                            type="email" name="email" placeholder="E-mail Address"
                                                            value="{{ old('email') }}">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-12 mb-1">
                                                        <select
                                                            class="form-select rounded @error('jurusan') is-invalid @enderror"
                                                            name="jurusan">
                                                            <option selected disabled value="">Jurusan</option>
                                                            <option value="Sistem Teknik Informatika">Sistem Teknik
                                                                Informatika</option>
                                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                                            <option value="Akutansi">Akutansi</option>
                                                        </select>
                                                        @error('jurusan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-12 mb-1">
                                                        <input
                                                            class="form-control rounded @error('semester') is-invalid @enderror"
                                                            type="number" name="semester" placeholder="Semester"
                                                            value="{{ old('semester') }}">
                                                        @error('semester')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-12 mb-1">
                                                        <input
                                                            class="form-control rounded @error('password') is-invalid @enderror"
                                                            type="password" name="password" placeholder="Password"
                                                            value="{{ old('password') }}">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <input type="text" name="role" value="mahasiswa" hidden>
                                                    <div class="form-button float-end mt-1 me-4 mb-3">
                                                        <button id="submit" type="submit" class="btn btn-primary"><i
                                                                class="fas fa-plus"></i> Tambah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-5">
                        <div class="sparkline13-list rounded">
                            <div class="form-body">
                                <div class="row">
                                    <div class="form-holder">
                                        <div class="form-content">
                                            <div class="form-items">
                                                <h3>Import Mahasiswa</h3>
                                                <form class="requires-validation" id="import-form" novalidate
                                                    enctype="multipart/form-data">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="import-file" class="form-label">Upload CSV File</label>
                                                        <input class="form-control" type="file" name="import-file"
                                                            id="import-file" accept=".csv" required>
                                                    </div>

                                                    <div class="col-md-12 mb-3">
                                                        <button type="button" class="btn btn-info"
                                                            id="download-template"><i class="fas fa-download"></i>
                                                            Download Contoh CSV</button>
                                                    </div>

                                                    <div class="form-button float-end me-4 mb-5">
                                                        <button id="import-submit" type="submit"
                                                            class="btn btn-primary"><i class="fas fa-upload"></i>
                                                            Import</button>
                                                    </div>
                                                </form>

                                                <div id="import-result" class="mt-3" style="display:none;">
                                                    <h5>Hasil Import:</h5>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Full Name</th>
                                                                <th>Email</th>
                                                                <th>Jurusan</th>
                                                                <th>Semester</th>
                                                                <th>Gender</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="imported-data"></tbody>
                                                    </table>
                                                    <button id="confirm-import" class="btn btn-success mt-3">Konfirmasi
                                                        Import</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Tabel Daftar Mahasiswa --}}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd lign-item-center text-center">
                                    <h3>Daftar Mahasiswa</h3>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
                                            <option value="">Export Basic</option>
                                            <option value="all">Export All</option>
                                            <option value="selected">Export Selected</option>
                                        </select>
                                    </div>
                                    @if (session('successDelete'))
                                        <div class="alert alert-danger">
                                            {{ session('successDelete') }}
                                        </div>
                                    @endif
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                        data-show-columns="true" data-show-pagination-switch="true"
                                        data-key-events="true" data-show-toggle="true" data-resizable="true"
                                        data-cookie="true" data-cookie-id-table="saveId" data-show-export="true"
                                        data-toolbar="#toolbar" class="wow fadeInUp" data-wow-delay="0.2s">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">No</th>
                                                <th data-field="name" data-editable="true">Nama</th>
                                                <th data-field="email" data-editable="true">Email</th>
                                                <th data-field="jurusan" data-editable="true">Jurusan</th>
                                                <th data-field="semester" data-editable="true">Semester</th>
                                                <th data-field="result_type" data-editable="true">Hasil</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $no }}</td>
                                                    <td class="text-decoration-none">{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    @if ($user->mahasiswa->isNotEmpty())
                                                        @foreach ($user->mahasiswa as $mahasiswa)
                                                            <td>{{ $mahasiswa->jurusan }}</td>
                                                            <td>{{ $mahasiswa->semester }}</td>
                                                        @endforeach
                                                    @else
                                                        <td>{{ '-' }}</td>
                                                        <td>{{ '-' }}</td>
                                                    @endif
                                                    @if ($user->result->isNotEmpty())
                                                        @foreach ($user->result as $result)
                                                            <td>{{ $result->result_type }}</td>
                                                        @endforeach
                                                    @else
                                                        <td>{{ '-' }}</td>
                                                    @endif
                                                    <td>
                                                        <a href="{{ route('user.edit', ['user' => $user->id]) }}"
                                                            class="btn btn-warning px-2 py-0 me-3">
                                                            <i class="fas fa-edit pe-1"></i>Edit
                                                        </a>

                                                        <form action="{{ route('user.destroy', ['user' => $user->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger px-2 py-0 text-white"><i
                                                                    class="fas fa-trash pe-1"></i>Delete</button>
                                                        </form>
                                                    </td>
                                                    @php
                                                        $no++;
                                                    @endphp
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.getElementById('import-form').addEventListener('submit', function(event) {
            event.preventDefault();

            const fileInput = document.getElementById('import-file');
            const file = fileInput.files[0];

            if (file && file.type === 'text/csv') {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const rows = e.target.result.split('\\n').slice(1);
                    const tableBody = document.getElementById('imported-data');
                    tableBody.innerHTML = '';

                    rows.forEach(row => {
                        const cols = row.split(',');
                        if (cols.length === 5) {
                            const tr = document.createElement('tr');
                            cols.forEach(col => {
                                const td = document.createElement('td');
                                td.textContent = col.trim();
                                tr.appendChild(td);
                            });
                            tableBody.appendChild(tr);
                        }
                    });

                    document.getElementById('import-result').style.display = 'block';
                };
                reader.readAsText(file);
            }
        });

        // Handle template download
        document.getElementById('download-template').addEventListener('click', function() {
            const csvContent = "Full Name,Email,Jurusan,Semester,Gender\n" +
                "John Doe,john.doe@example.com,Sistem Teknik Informatika,1,Male\n" +
                "Jane Smith,jane.smith@example.com,Sistem Informasi,2,Female\n";

            const blob = new Blob([csvContent], {
                type: 'text/csv;charset=utf-8;'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'contoh_import_mahasiswa.csv';
            a.click();
            URL.revokeObjectURL(url);
        });

        // Simulate final import confirmation
        document.getElementById('confirm-import').addEventListener('click', function() {
            alert('Data berhasil diimport!');
        });
    </script>
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Data table -->
    <script src="{{ asset('assets/js/data-table/bootstrap-table.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/tableExport.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/data-table-active.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-table-editable.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-table-resizable.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/colResizable-1.5.source.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-table-export.js') }}"></script>
@endsection
