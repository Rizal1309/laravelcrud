@extends('layout.master')
@section('konten')
@include('layout.pesan')
<a href="{{ route('produk.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
  <form action="{{ route('produk.store') }}" method='post'>
  @csrf
<form >
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" >
  </div>
<form>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
  </div>
<form>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control" id="harga"  name="harga" >
  </div>
<form>
  <div class="form-group">
    <label for="stok">Stok</label>
    <input type="text" class="form-control" id="stok" name="stok" >
  </div>
  @error('nama','deskripsi','harga','stok')
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




