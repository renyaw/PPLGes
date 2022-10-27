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
        <div class='alert alert-success text-center alert-dismissible fade show'><h5>Info: Data berhasil disimpan.</h5>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>
        </div>
        <div class="row justify-content-evenly">
          <div class="col-4 mt-3">
            <div class="image overflow-hidden">
                <img style="border-radius:5%"src='<?php echo "fotoprofile/" .$data["fotoprofile"]; ?>' alt="" width="250" />
            </div>
          </div>
          <div class="col-8">
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
              <label for="status" class="col-sm-3 col-form-label fw-semibold">Jalur Masuk : </label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="jalur_masuk" value="<?php echo $data["jalur_masuk"]; ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="wali" class="col-sm-3 col-form-label fw-semibold">Kode Wali : </label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="wali" value="<?php echo $data["kode_wali"]; ?>">
              </div>
            </div>
            
            <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-primary mt-4 " onclick="location.href='srs9.php'">Submit</button>
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