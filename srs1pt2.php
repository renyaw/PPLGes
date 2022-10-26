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
    session_start();
    require_once "db_login.php";
    
    ?>
    <div class="container mt-4">
    <div class="card">
      <div class="card-header fw-bold">
        Data Mahasiswa
      </div>
      <div class="card-body">
      <!-- BODY  -->
      <div class="container ">
        <div class="alert alert-success pb-1 pt-2" role="alert">
            <h5>Info : Data berhasil disimpan.</h5>
            <p>Pastikan daya yang Anda Masukkan benar.</p>
        </div>
        <div class="row justify-content-evenly">
          <div class="col-4 mt-3">
            <div class="image overflow-hidden">
                <img class="" src="img\Bebek.png" alt="" width="250" />
            </div>
          </div>
          <div class="col-8">
         
            <?php 
            $atnama = $_POST["nama"];
            $atnama = ucwords(strtolower($atnama));
            $nim = test_input($_POST["nim"]);
            $nama = test_input($atnama);
            $angkatan = test_input($_POST["angkatan"]);
            $jalur_masuk = test_input($_POST["jalur_masuk"]);
            $kode_wali = test_input($_POST["kode_wali"]);
            //insert into database
            
            $result = $db->query("INSERT INTO mahasiswa (nim, nama, angkatan, jalur_masuk, kode_wali) VALUES ('$nim', '$nama', '$angkatan', '$jalur_masuk', '$kode_wali')") ;
            $data = mysqli_fetch_assoc($result);
          
            ?>
            <form>
            <div class="mt-1 mb-3">
              <label for="nim" class=" col-form-label fw-semibold">NIM Mahasiswa</label>
              <input type="text" readonly class="form-control-plaintext  " id="nim" value="<?php echo $data["nim"]; ?>">
            </div>
            <div class="mb-3">
              <label for="nama" class=" col-form-label fw-semibold">Nama Mahasiswa</label>
              <input type="text" readonly class="form-control-plaintext " id="nama" value="<?php echo $data["nama"]; ?>">
            </div>
            <div class="row mb-3">
              <label for="angkatan" class="col-sm-3 col-form-label fw-semibold">Angkatan : </label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="angkatan" value="<?php echo $data["angkatan"]; ?>">
              </div>
            </div>
            <div class=" row mb-3">
              <label for="status" class="col-sm-3 col-form-label fw-semibold">Status : </label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="status" value="(Ambil dari db)">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="wali" class="col-sm-3 col-form-label fw-semibold">Kode Wali : </label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="wali" value="<?php echo $data["kode_wali"]; ?>">
              </div>
            </div>
            
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-primary mt-4 ">Submit</button>
            </div>
            
          </form>

          </div>
        </div>
      </div>
      </div>
      <!-- END BODY -->
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <div class="bg-white">
      <br>
      <br>
    </div>
    <?PHP
    include('Footer.php');
    ?>
  </body>
</html>