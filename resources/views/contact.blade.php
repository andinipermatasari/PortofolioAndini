@extends('template')
@section('content')
    <a href="{{ url('contact/add') }}"></a>
    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>PESAN</th>
            <th>AKSI</th>
        </tr>
        @foreach ($contact as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->pesan }}</td>
                <td>
                    <a href="contact/hapus/{{ $item ->id }}" class="btn btn-danger btn-sm" onclick="return window.confirm('hapus data ini?')" >Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection