@extends('template')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
        @csrf
        <form action="{{ $action }}">
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <form action="">
                            <div class="mb-3">
                                <label for="" class="form-label">Nis</label>
                                <input type="text" name="nis" id="nis" class="form-control" value="{{ $nis }}" placeholder="Masukan Nis">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="{{ $nama }}" placeholder="Masukkan Nama">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Ttl</label>
                                <input type="text" name="ttl" id="ttl" class="form-control" value="{{ $ttl }}" placeholder="Masukkan TTL">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Asal Sekolah</label>
                                <input type="text" name="asalsekolah" id="asalsekolah" class="form-control" value="{{ $asalsekolah }}" placeholder="Masukkan Asal Sekolah">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Jenis Kelamin</label>
                                <select name="JK" id="JK" class="form-select" value="{{ $JK }}">
                                    <option value="">Jenis Kelamin</option>
                                    <option value="L" {{ $JK=='L'?'selected':'' }}>Laki-Laki</option>
                                    <option value="P" {{ $JK=='P'?'selected':'' }}>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $alamat }}" placeholder="Masukkan Alamat">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Foto</label>
                                <img src="/storage/{{ $foto }}" alt="" width="250">
                                <input type="file" name="foto" id="foto" class="form-control" value="{{ $foto }}" placeholder="Masukkan foto">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">About Me</label>
                                <input type="text" name="about" id="about" class="form-control" value="{{ $about }}" placeholder="Masukkan about">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Simpan" class="form-control btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </form>
</body>
</html>
@endsection
