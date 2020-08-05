@extends('layouts.app')

@section("title",'Halaman dosen')
@section("bread1",'dosen')
@section("bread2",'daftar')

@section('content')
    <h2> Daftar Dosen </h2>
    <p><a href="/dosen/create" class="btn btn-success btn-sm">Tambah</a></p>
    @include('layouts.alert')
    
    <table class="table table-striped" id="dosen-table">
        <thead>
            <tr>
                <th>nomor</th>
                <th>kode dosen</th>
                <th>nama dosen</th>
                <th>Nidn</th>
                <th>email</th>
                <th>handphone</th>
                <th>Alamat</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script>
        $(function () {
            $('#dosen-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('dosen_list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'kode_dosen', name: 'kode_dosen'},
                    {data: 'nama_dosen', name: 'nama_dosen'},
                    {data: 'nidn', name: 'nidn' },
                    {data: 'email', name: 'email'},
                    {data: 'handphone', name: 'handphone'},
                    {data: 'alamat', name: 'alamat' },
                    {data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });

        });
    </script>

@endsection