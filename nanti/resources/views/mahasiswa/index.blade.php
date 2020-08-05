@extends('layouts.app')
@section('title','Mahasiswa Page')
@section('bread1','Mahasiswa')
@section('bread2','Data')
@section('content')
<h3>Master Data Mahasiswa</h3>
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
</table>
<script>
$(function() {
$('#mhs-table').DataTable({
processing: true,
serverSide: true,
ajax: "{{ route('mhs.list') }}",
columns: [
{ data: 'DT_RowIndex', name: 'DT_RowIndex' },
{ data: 'nim', name: 'nim' },
{ data: 'nama_lengkap', name: 'nama_lengkap' },
{ data: 'mprodi.nama_prodi', name: 'nama_prodi' },
{ data: 'alamat', name: 'alamat' },
{ data: 'action', name: 'action', orderable: false,
searchable: false }
]
});
});
</script>
@endsection