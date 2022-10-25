@extends('layout.master')
@section('konten')
@include('layout.pesan')
<table border="1" class="table table-striped">
  <thead>
    <tr>
      <th style="width: 5%" >no</th>
      <th>Nama</th>
      <th>keterangan</th>
      <th><a href="{{ route('kategori.create') }}"><button type="button" class="btn btn-success" >tambah data</button></a></th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1 ; @endphp
    @foreach ($kategori as $data)
    <tr>
      <td>{{ $no++ }}</td>
      <td><a href="{{ route('kategori.show', $data->id ) }}">{{ $data->nama }}</a></td>
      <td><a href="{{ route('kategori.show', $data->id ) }}">{{ $data->keterangan }}</a></td>
      <td>
        <form action="{{ route('kategori.destroy', $data->id )}}" method='post'>
         @csrf
        @method('delete')
        <a href="{{ route('kategori.edit', $data->id) }}"><button type="button" class="btn btn-warning">edit</button></a>
        <button class="btn btn-danger btn-sm"  type="submit" onclick="return comfirm('apakah anda yakin ?')">Delete</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection