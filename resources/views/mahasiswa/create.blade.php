@extends('layouts.app')
@section('title','Mahasiswa Page')
@section('bread1','Mahasiswa')
@section('bread2','Data')
@section('content')
    <h3>Form Mahasiswa</h3><hr>
    
   @include('layouts.alert')
    <form action="/mhs/store" method="POST">
   @csrf
    <div class="form-group row">
      <label for="nim" class="col-sm-12">NIM</label>
      <div class="col-sm-3">
        <input type="text" name="nim" class="form-control" id="nim"placeholder="Nomor Induk Mahasiswa">
       @error('nim')<small id="nim" class="form-text text-danger">{{ $message}}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="nim" class="col-sm-12">Nama Lengkap</label>
      <div class="col-sm-5">
        <input type="text" name="nama_lengkap" class="form-control"id="nama_lengkap" placeholder="Masukan nama dengan benar">
       @error('nama_lengkap')<small id="nama_lengkap" class="form-text textdanger">{{ $message }}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="nim" class="col-sm-12">Program Studi</label>
      <div class="col-sm-3">
        <select name="prodi" id="prodi" class="form-control">
           @foreach($prodi as $item)
                <option value="{{ $item->kode_prodi }}">{{ $item->nama_prodi }}</option>
           @endforeach
        </select>
        <small id="nama" class="form-text text-muted"></small>
      </div>
    </div>
    <div class="form-group row">
      <label for="nim" class="col-sm-12">Alamat</label>
      <div class="col-sm-8">
        <textarea name="alamat" class="form-control" id="alamat"></textarea>
        <small id="nama" class="form-text text-muted"></small>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Simpan</button>
    <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
    </form>
@endsection