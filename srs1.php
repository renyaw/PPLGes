<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Data Pribadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://unpkg.com/htmlincludejs"></script>
  </head>
  <body>
    <?php
    //Cek apakah sudah login atau belum
    session_start();
    require_once "db_login.php";
    ?>
    <div class="container px-5 pt-4 pb-5">
      <h2>Data Mahasiswa</h2>
      <div class="row">
        <div class="col-4 mt-3">
          <div class="image overflow-hidden">
              <img class="" src="img\Bebek.png" alt="" width="250" />
          </div>
        </div>
        <div class="col-6">
        <form method="POST" name="form" autocomplete="on" action="srs1pt2.php">
          <div class="mb-3 mt-3">
            <input type="text" class="form-control" placeholder="NIM Mahasiswa" id="nim" name="nim">
          </div>
          <div class="mb-3 mt-5">
            <input type="text" class="form-control" placeholder="Nama Mahasiswa" id="nama" name="nama">
          </div>
          <div class="row">
          <div class=" col-6 mt-3">
          <label for="angkatan" class="form-label">Angkatan:</label>
            <select name="angkatan" id="angkatan" class="form-control form-control">
              <option value="">Pilih Angkatan</option>
              <option value="">2017</option>
              <option value="">2018</option>
              <option value="">2019</option>
              <option value="">2020</option>
              <option value="">2021</option>
              <option value="">2022</option>
              <option value="">2023</option>
            </select>
          </div>
          <div class=" col-6 mt-3">
          <label for="status" class="form-label">Status:</label>
            <select name="status" id="status" class="form-control form-control">
                <option value="">Pilih Status</option>
                <option value="">Aktif</option>
                <option value="">Tidak Aktif</option>
                <option value="">Cuti</option>
                <option value="">Mangkir</option>
            </select>
          </div>
          </div>
          <div class="mb-3 mt-4">
          <label for="wali" class="form-label">Kode Wali:</label>
            <select name="kode_wali" id="kode_wali" class="form-control form-control">
            <option value="">Pilih Kode Wali</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
  </body>
</html>