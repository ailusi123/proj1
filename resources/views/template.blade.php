<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portopolio | LUSSY</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial bold;
            background-color:rgb(226, 132, 190);
        }
        .form-label>span{
          color:red;
        }
    </style>
</head>
<body>
  <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgb(141, 218, 241)">
        <div class="container">
          <a class="navbar-brand" href="#">LUSSY SULISTIA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#project">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link" href="#contact">contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--Akhir navbar-->

      <!--home-->

      <section id="home">
        <div>
          <div class="container-fluid pt-5">
            <div class="text-ng-light text-center p-5">
              <img src="/storage/{{ $profil->foto}}"alt="" width="200" class="img-thumbnail rounded-circle">
              <p class="fs-5">{{$profil->nis}}</p>
              <p class="fs-5">{{$profil->name}}</p>
              <p class="fs-5">{{$profil->ttl}}</p>
              <p class="fs-5">{{$profil->alamat}}</p>
              <p class="fs-5">{{$profil->sekolah}}</p>
            </div>
          </div>
        </div> 
      </section>

      <!---Akhir home-->

      <!-- About me-->
      <section id="about" class="pt-5">
        <div class="container">
        <div class="p-5text text-center">
          <h3 class="fw-bold mb-3">About Me</h3>
          <div class="row justify-content-center">
            <div class="col-md-4">
              <p></p>
            </div>
            <div class="col- md-4">
              <p>Saya  LUSSY SULISTIA, Seorang pelajar jurusan Rekayasa Perangkat Lunak yang memiliki niat dan bakat dalam bidang teknilogi,komunikasi,dan Bisnis. Saya masih kecil, Saya tertarik dengan dunia Digital dan bisnis. Melalui pendidikan yang saya jalani, Saya memiliki pengetahuan dan keterampilan dalam bidang pemrograman dan berjualan. Diluar sekolah saya memiliki hobby berjualan dan  bermain Volly.</p>
            </div>
          </div>
        </div>
        </div>
      </section>
      <!--Akhir About me-->
      <!--My Project-->
      <section id="project" class="pt-2">
        <div class="container">
          <div class="p-5 text-bg-light text-center">
            <h3 class="fw-bold mb-3">My Projects</h3>
            <div class="row justify-content-center">
              <div class="col-md-4 mb-3">
                <div class="card">
                    @foreach ($project as $item)
                  <img src="/storage/{{$item->foto}}" class="card-img-top" alt="Project 1">
                  <div class="card-body">
                    <p class="card-text">{{$item->name_project}}</p>
                    <p class="card-text">{{$item->kategori}}</p>
                    <p class="card-text">{{$item->deskripsi}}</p>
                    </p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
      <!--Akhir project-->
      <!-- Contact -->

      <section id="contact">
      <div class="container p-5">
        <h3 class="fw-bold text-center mb-3">Contact</h3>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form action="" method="post">
              <div class="mb-3">
                <label for="" class="form-label">Nama Lengkap <span>*</span></label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Email <span>*</span></label>
                <input type="email" name="email" id="email" class="form-control">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Pesan <span>*</span></label>
                <input type="text" name="pesan" id="pesan" class="form-control">
              </div>
              <div class="mb-3">
                <input type="submit" value="Kirim" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div> 
      </section>
      
      <!-- Akhir Contact -->
      <div class="container-fluid">
        <footer class="py-3 my-3 border-top">
        <p class="text-center">&copy;2023 <a href="" class="fw-bold text-center-decoration-none">Ailusi Sulistiawati</a></p>
        </footer>
      </div>
</body>
<script src="js/bootstrap.bundle.js"></script>
</html>