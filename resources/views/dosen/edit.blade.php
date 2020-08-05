@extends('layouts.app')
@section('title','Dosen Page')
@section('bread1','Dosen')
@section('bread2','Data')
@section('content')
    <h3>Form Dosen</h3><hr>
    
   @include('layouts.alert')
    <form action="{{ route('dosen.update', $dosen->kode_dosen) }}" method="POST">
   @csrf
   @method('PUT')
    <div class="form-group row">
      <label for="kode_dosen" class="col-sm-12">kode dosen</label>
      <div class="col-sm-3">
        <input type="text" name="kode_dosen" class="form-control" id="kode_dosen"placeholder="kode dosen" value="{{ $dosen->kode_dosen }}" readonly>
       @error('kode_dosen')<small id="kode_dosen" class="form-text text-danger">{{ $message}}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="kode_dosen" class="col-sm-12">Nama dosen</label>
      <div class="col-sm-5">
        <input type="text" name="nama_dosen" class="form-control"id="nama_dosen" placeholder="Masukan nama dengan benar" value="{{ $dosen->nama_dosen }}">
       @error('nama_dosen')<small id="nama_dosen" class="form-text textdanger">{{ $message }}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="kode_dosen" class="col-sm-12">nidn</label>
      <div class="col-sm-5">
      <input type="text" name="nidn" class="form-control"id="nidn" placeholder="Masukan nama dengan benar" value="{{ $dosen->handphone }}">
       @error('nidn')<small id="nidn" class="form-text textdanger">{{ $message }}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="kode_dosen" class="col-sm-12">email</label>
      <div class="col-sm-8">
        <textarea name="email" class="form-control" id="email">{{ $dosen->email }}</textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="kode_dosen" class="col-sm-12">handphone</label>
      <div class="col-sm-5">
        <input type="text" name="handphone" class="form-control"id="handphone" placeholder="Masukan nama dengan benar" value="{{ $dosen->handphone }}">
       @error('handphone')<small id="handphone" class="form-text textdanger">{{ $message }}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="nim" class="col-sm-12">Alamat</label>
      <div class="col-sm-8">
        <textarea name="alamat" class="form-control" id="alamat">{{ $dosen->alamat }}</textarea>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Simpan</button>
    <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
    </form>
@endsection