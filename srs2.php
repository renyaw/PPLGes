<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://unpkg.com/htmlincludejs"></script>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    <style>
      body {
        font-family: "Inter";
        font-size: 22px;
      }
    </style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <include src="navbar.html"></include>
    <div class="container mt-3">
      <h3 class="fw-bold">Update Data Diri</h3>
      <hr />
      <div class="card bg-light mt-5  border- rounded-0">
        <div class="row m-2 mt-4">
          <div class="col-2">
            <img src="img/Bebek.png" alt="fotomhs" width="170" height="210" />
            <br />
            <br />
            <div class="container text-center">
              <button class="btn btn-primary" type="button">Ubah Foto</button>
              <br />
              <br />
              <h6>2022/2023 Ganjil</h6>
              <span class="badge text-bg-success">Aktif</span>
            </div>
          </div>
          <div class="col-1"></div>
          <div class="col">
            <b>NIM</b><br />
            24060120130053<br />
            <br />
            <b>Nama</b><br />
            Arya Gessangie Sugyanti Nora Faqih<br />
            <br />
            <b>Tempat Lahir</b><br />
            <input type="text" class="form-control" id="tempatlahir" />
            <br />
            <b>Tanggal Lahir</b><br />
            <input type="text" class="form-control" id="tanggallahir" />
            <br />
            <b>NIK</b><br />
            <input type="text" class="form-control" id="nik" />
            <br />
            <b>Nomor</b><br />
            <input type="text" class="form-control" id="nomor" />
            <br />
            <button class="btn btn-success" type="button">Update</button>
            <br /><br />
          </div>
          <div class="col-1"></div>
          <div class="col">
            <b>Angkatan</b><br />
            2020<br />
            <br />
            <b>Prodi</b><br />
            Informatika<br />
            <br />
            <b>Fakultas</b><br />
            Sains dan Matematika<br />
            <br />
            <b>Alamat</b><br />
            <input type="text" class="form-control" id="alamat" />
            <br />
            <b>Provinsi</b><br />
            <input type="text" class="form-control" id="provinsi" />
            <br />
            <b>Kabupaten/Kota</b><br />
            <input type="text" class="form-control" id="kabkota" />
            <br />
            <br />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
