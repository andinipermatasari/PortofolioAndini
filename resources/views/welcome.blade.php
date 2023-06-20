<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portopolio | Andini Permatasari</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial;
            background-color: #8696d6;
        }
    </style>
</head>
<body>
    <!--Navbar-->
   <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #7A86B6">
  <div class="container">
    <a class="navbar-brand" href="#">Andini Permatasari</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portofolio">Portofolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
<!--Akhir Navbar-->

<!--Home-->

<section id="home" >
  <div class="container-fluid p-0">
    <div class="text-bg text-center p-3">
      <img src="/storage/{{ $profil->foto }}" alt="" width="200" class="img-thumbnail rounded-circle">
      <h2 class="fw-bold mt-3">{{ $profil->nama }}</h2>
      <p class="fs-5">{{ $profil->about }}</p>
    </div>
  </div>
</section>
<!--Akhir Home-->

<!-- About Me -->
<section id="about" class="pt-5">
  <div class="container">
    <div class="p-5 text-center">
      <h3 class="fw-bold mb-3">About Me</h3>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <p>Halo, Nama Saya Andini Permatasari Orang-Orang Memanggilku Dengan Sebutan Anya. Saya Lahir Di Tasikmalaya, 01 Agustus 2006. Hobi Saya Memasak Dan Tidur. Saya Bisa Tidur Dari Saya Pulang Sekolah Sampai Saya Akan Bersekolah Kembali.</p>
        </div>
        <div class="col-md-4">
          <p>Saya Seorang Pelajar Dari SMK YPC Tasikmalaya Dan Saya Mengambil Jurusan Rekayasa Perangkat Lunak.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir About Me -->

<!-- My Project -->
<section id="portofolio" class="pt-5">
  <div class="container">
    <div class="p-5 text-bg-light text-center">
      <h3 class="fw-bold mb-3">PORTOFOLIO</h3>
      <div class="row justify-content-center">
          @foreach ($portofolio as $item)
          
          
            <div class="col col-md-4 mb-5 text-center">
                <div class="card mt-5 ms-4" style="width: 18rem;">
                    <img src="/storage/{{ $item->foto }}" class="card-img-top" alt="..." width="200" height="200">
                        <div class="card-body">
                            <h4 class="fw-bold">{{ $item->nama }}</h4>
                            <p class="card-text">{{ $item->kategori }}</p>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
      </div>
    </div>
 </div>
</section>
<!-- Akhir My Project -->

<!-- My Contatc -->
<section id="contact" class="pt-5">
  <div class="container">
    <div class="p-5 text-bg-light text-center">
      <h3 class="fw-bold mb-3">Contact Me</h3>
      <div class="row justify-content-center">
        <div class="col-md-6 mb-3">
          <div class="card-body">
            <form action="{{ url('contact/create') }}" method="post">
              @csrf
                <div class="mb-3">
                    <label for="form" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="mb-3">
                  <label for="form" class="form-label">Email</label>
                  <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                  <label for="form" class="form-label">Pesan</label>
                  <input type="text" name="pesan" id="pesan" class="form-control">
                </div>
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary">KIRIM</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir My Contact -->
<div class="container-fluid">
    <footer class="py-3 my-3 border top">
        <p class="text-center">&copy; 2023 <a href="https://www.instagram.com/xxx" target="_blank" class="fw-bold text-decoration-none">Andini Permatasari</a></p>
    </footer>
</div>
</body>
<script src="js/bootstrap.bundle.js"></script>
</html>
{{-- <div class="card">
<img src="img/thv.webp" class="card-img-top" alt="Project 1">
<div class="card-body">
  <p>Kim Taehyung, Laki Laki Kelahiran 30 Desember 1995</p>
</div>
</div>
</div>
<div class="col-md-4 mb-3">
<div class="card">
<img src="img/jungkook.jpg" class="card-img-top" alt="Project 1">
<div class="card-body">
  <p>Jeon Jungkook, Laki Laki Kelahiran 01 September 1997</p>
</div>
</div> --}}
{{-- </div>
<div class="col-md-4 mb-3">
<div class="card">
<img src="img/jm.webp" class="card-img-top" alt="Project 1">
<div class="card-body">
  <p>Park Jimin, Laki Laki Kelahiran 13 Oktober 1995</p>
</div>
</div> --}}