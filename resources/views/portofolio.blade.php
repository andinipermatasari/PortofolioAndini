@extends('template')
@section('content')

<a href="{{ url('portofolio/add') }}" class="btn btn-primary btn-sm">tambah data</a>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Portofolio</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    @foreach ($portofolio as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->kategori }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>
                <img src="/storage/{{ $item->foto }}" alt="" width="150">
            </td>
            <td>
                <a href="portofolio/hapus/{{ $item ->id }}" class="btn btn-danger btn-sm" onclick="return window.confirm('hapus data ini?')" >Hapus</a>
                <a href="portofolio/edit/{{ $item ->id }}" class="btn btn-success btn-sm">Edit</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection