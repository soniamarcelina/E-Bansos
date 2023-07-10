<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- my icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- my fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        .content{
            padding: 25px;
            margin: 8%;
            
        }
        body{
            font-family: 'Poppins', sans-serif;
        }
        .img-fluid{
            margin-top: 15%;
        }
    </style>
    <title>Form Login</title>
  </head>
  <body>
     <!-- navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: brown">
      <div class="container">
        <a class="navbar-brand" href="#">E-BANSOS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Informasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Pencarian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Tentang Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

      <div class="container form">
          <div class="row content">
              <div class="col-md-6 mb-3">
                <img src="awal.jpg" class="img-fluid" alt="image">
              </div>
              <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                        <h4 class="text-center"><i class="bi bi-person-fill"></i>Login</h4>
                    </div>
                    <div class="card-body">
                        <form>
                        <div class="form-group">
                            <label for="nik"><i class="bi bi-bookmark-fill"></i>NIK</label>
                            <input type="text" name="nik" class="form-control" id="nik" placeholder="Masukkan NIK Anda">
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="bi bi-lock-fill"></i>Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    </div>
                  </div>
              </div>
            </div>
          </div>
      </div>


    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
  </body>
</html>