@extends('layout.master')
@section('konten')
@include('layout.pesan')
<a href="{{ route('kategori.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
  <form action="{{ route('kategori.update', $kategori->id) }}" method='post'>
  @csrf
  @method('put')
<form >
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ $kategori->nama }}" >
  </div>
<form>
  <div class="form-group">
    <label for="keterangan">keterangan</label>
    <input type="text" class="form-control" id="deskripsi" name="keterangan" value="{{ $kategori->keterangan }}">
  </div>
  <button  class="btn btn-primary" type="submit" >update</button>
  </div>
</div>

{{-- <a href="{{ route('produk.index') }}" type="submit"><button type="button" class="btn btn-warning">kembali</button></a>
<form action="{{ route('produk.update', $produk->id) }}" method="post">
@csrf
@method('put')
nama : <input type="text" name="nama" value="{{ $produk->nama }}">
deskripsi : <input type="text" name="deskripsi" value="{{ $produk->deskripsi }}">
harga  : <input type="text" name="harga" value="{{ $produk->harga }}">
stok: <input type="text" name="stok" value="{{ $produk->stok }}"> --}}
@error('nama','keterangan')
<strong>{{ $message }}</strong>
@enderror
</form>
@endsection
