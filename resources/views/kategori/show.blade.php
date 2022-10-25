@extends('layout.master')
@section('konten')
<a href="{{ route('kategori.index') }}" type="submit"><button  type="button" class="btn btn-warning">kembali</button></a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">nama</th>
      <th scope="col">keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> {{ $kategori->nama }}</td>
      <td> {{ $kategori->keterangan }}</td>
    </tr>
  </tbody>
</table>
@endsection


{{-- <p> nama : {{ $produk->nama }}</p>
<p> deskripsi : {{ $produk->deskripsi }}</p>
<p> harga : {{ $produk->harga }}</p>
<p> stok : {{ $produk->stok }}</p> --}}


{{-- <button  href="{{ route('produk.index') }}" type="submit">kembali</button> --}}


{{-- <button><a ></a>kembali</button> --}}
    




