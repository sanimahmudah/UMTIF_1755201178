@extends('layouts.app')

@section("title",'Halaman mahasiswa')
@section("bread1",'mahasiswa')
@section("bread2",'daftar')

@section('content')
    <h2> Daftar Mahasiswa </h2>
    <p><a href="/mhs/create" class="btn btn-success btn-sm">Tambah</a></p>
    @include('layouts.alert')
    
    <table class="table table-striped" id="mhs-table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Prodi</th>
                <th>Alamat</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script>
        $(function () {
            $('#mhs-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('mhs_list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'nim', name: 'nim'},
                    {data: 'nama_lengkap', name: 'nama_lengkap'},
                    {data: 'prodi.nama_prodi', name: 'nama_prodi' },
                    {data: 'alamat', name: 'alamat' },
                    {data: 'action', name: 'action', orderable: false,searchable: false }
                ]
            });

        });
    </script>

@endsection