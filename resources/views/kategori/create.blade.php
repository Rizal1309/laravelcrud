@extends('layout.master')
@section('konten')
@include('layout.pesan')
<a href="{{ route('kategori.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
  <form action="{{ route('kategori.store') }}" method='post'>
  @csrf
<form >
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" >
  </div>
<form>
  <div class="form-group">
    <label for="keterangan">keterangan</label>
    <input type="text" class="form-control" id="keterangan" name="keterangan">
  </div>
  @error('nama','deskripsi')
<strong>{{ $message }}</strong>
@enderror
<br>
<button class="btn btn-primary" type="submit">Save</button>
</form>
</div>
</div>



{{-- nama  <input type="text" name="nama"><br>
deskripsi  <input type="text" name="deskripsi"><br>
harga <input type="text" name="harga"><br>
stok  <input type="text" name="stok"><br> --}}

   
@endsection 




