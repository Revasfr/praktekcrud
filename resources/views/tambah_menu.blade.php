<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>tambah menu</title>
  </head>
  <body>
  <div class="card text-center ">
      <h1>Welcome to Vogue Cafe!</h1>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">VOGUE'S</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/menu">Vogue Menu</a>
              </li>
            </ul>
            <li>
              <a href="#"><img src="voguecaf.png" width="40" heigth="40"></a>
            </li>
            <!-- <form class="d-flex">
            <a href="/login" class="btn btn-primary float-end">Login</a>
            </form> -->
          </div>
        </div>
     </nav>

      <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5 class="float-start">Tambah Daftar Menu</h5>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="input" class="col-sm-2 col-form-label">Nama Menu</label>
                        <div class="col-sm-10">
                            <input name="menu" class="form-control" id="input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="input" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input name="harga" class="form-control" id="input">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

      <nav class="navbar fixed-bottom navbar-dark bg-dark mt-5">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">@VOGUE CAFE</a>
        <a class="navbar-brand" href="#">&#169REVA</a>
        </div>
    </nav>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>