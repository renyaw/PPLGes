<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SRS 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar bg-light sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="Logo" width="30" height="35" class="d-inline-block" />
          <b>informatika</b>
        </a>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">informatika</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <h2 class="mb-5">Verifikasi IRS Mahasiswa</h2>
      <div class="row">
        <div class="col-2 mt-2">
          <div class="card border border-5">
            <div class="card-body text-center" style="background-color: #ffee54">
              <a href=""><button style="background-color: #ffee54; border: none; outline: none">IRS</button></a>
            </div>
          </div>
        </div>
        <div class="col-2 mt-2">
          <div class="card">
            <div class="card-body text-center" style="background-color: #ff5a5a">
              <a href=""><button style="background-color: #ff5a5a; border: none; outline: none">KHS</button></a>
            </div>
          </div>
        </div>
        <div class="col-6 mx-auto mb-5">
          <div class="">
            <label for="doswal" class="form-label">Fakultas</label>
            <select class="form-select" aria-label="Default select example">
              <option selected disabled>-- Pilih Fakultas --</option>
              <option value="1">Sains dan Matematika</option>
              <option value="2">Kesehatan Masyarakat</option>
              <option value="3">Perikanan</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-2 mt-2">
          <div class="card">
            <div class="card-body text-center" style="background-color: #52ff63">
              <a href=""><button style="background-color: #52ff63; border: none; outline: none">PKL</button></a>
            </div>
          </div>
        </div>
        <div class="col-2 mt-2">
          <div class="card">
            <div class="card-body text-center" style="background-color: #6473ff">
              <a href=""><button style="background-color: #6473ff; border: none; outline: none">Skripsi</button></a>
            </div>
          </div>
        </div>
        <div class="col-6 mx-auto">
          <div class="">
            <label for="doswal" class="form-label">Program Studi</label>
            <select class="form-select" aria-label="Default select example">
              <option selected disabled>-- Pilih Program Studi --</option>
              <option value="1">Informatika</option>
              <option value="2">Matematika</option>
              <option value="3">Biologi</option>
            </select>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="mt-5">
          <div class="col-11 gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-info text-white" type="button">Verifikasi</button>
            <button class="btn btn-danger" type="button">Belum Verifikasi</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-2 mt-5">
          <select class="form-select" aria-label="Default select example">
            <option selected disabled>Tampilkan 8 Item</option>
            <option value="1">BWA</option>
            <option value="2">BWA</option>
            <option value="3">BWA</option>
          </select>
        </div>
        <div class="col-2 mt-3 ">
            <label for="nama" class="form-label">Cari</label>
            <input type="text" placeholder="Cari"class="form-control" id="nama">
        </div>
      </div>
      <table class="table table-hover mt-4 text-center">
        <thead>
          <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">Activity</th>
          </tr>
        </thead>
        <tbody class="table-group-divider text-center">
          <tr>
            <td>2406012014001</td>
            <td>Titi</td>
            <td>Terima | Tolak | Edit</td>
          </tr>
          <tr>
            <td>2406012014002</td>
            <td>Dije</td>
            <td>Terima | Tolak | Edit</td>
          </tr>
          <tr>
            <td>2406012014003</td>
            <td>Ahay</td>
            <td>Terima | Tolak | Edit</td>
          </tr>
          <tr>
            <td>2406012014004</td>
            <td>Soleh</td>
            <td>Terima | Tolak | Edit</td>
          </tr>
          <tr>
            <td>2406012014005</td>
            <td>Solihun</td>
            <td>Terima | Tolak | Edit</td>
          </tr>
          <tr>
            <td>2406012014006</td>
            <td>Ihik</td>
            <td>Terima | Tolak | Edit</td>
          </tr>
          <tr>
            <td>2406012014007</td>
            <td>Kursi</td>
            <td>Terima | Tolak | Edit</td>
          </tr>
          <tr>
            <td>2406012014008</td>
            <td>Meja</td>
            <td>Terima | Tolak | Edit</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="bg-white">
      <br>
      <br>
    </div>
    <?PHP
    include('Footer.php');
    ?>
  </body>
</html>
