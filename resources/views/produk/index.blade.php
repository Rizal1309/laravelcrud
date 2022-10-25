@extends('layout.master')
@section('konten')
@include('layout.pesan')
<table border="1" class="table table-striped">
  <thead>
    <tr>
      <th style="width: 5%" >no</th>
      <th>Nama</th>
      <th>deskripsi</th>
      <th>harga</th>
      <th>stok</th>
      <th><a href="{{ route('produk.create') }}"><button type="button" class="btn btn-success" >tambah data</button></a></th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1 ; @endphp
    @foreach ($produk as $data)
    <tr>
      <td>{{ $no++ }}</td>
      <td><a href="{{ route('produk.show', $data->id ) }}">{{ $data->nama }}</a></td>
      <td><a href="{{ route('produk.show', $data->id ) }}">{{ $data->deskripsi }}</a></td>
      <td><a href="{{ route('produk.show', $data->id ) }}">{{ $data->harga }}</a></td>
      <td><a href="{{ route('produk.show', $data->id ) }}">{{ $data->stok }}</a></td>
      <td>
        <form action="{{ route('produk.destroy', $data->id )}}" method='post'>
         @csrf
        @method('delete')
        <a href="{{ route('produk.edit', $data->id) }}"><button type="button" class="btn btn-warning">edit</button></a>
        <button class="btn btn-danger btn-sm"  type="submit" onclick="return comfirm('apakah anda yakin ?')">Delete</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection