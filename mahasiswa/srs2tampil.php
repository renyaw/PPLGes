<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Data Pribadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://unpkg.com/htmlincludejs"></script>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    <style>
      body {
        font-family: "Inter";
        font-size: 22px;
      }
      </style>
  </head>
  <body class="bg-light">
    <?php
    require_once "db_login.php";
    include('navbar.php');
    $noinduk = $_SESSION["noinduk"];
    $query = $db->query("SELECT * from mahasiswa where nim='$noinduk'");
    $data = mysqli_fetch_assoc($query);
    ?>

    <div class="container py-5 bg-white">
      <h2 class="fw-bold">Data Diri</h2>
      <div name="garishr" class="row border border-dark my-3 mx-1"></div>
      <?php
        if(isset($_GET['pesan'])){
          //salah akun/password
          if($_GET['pesan']=="gagal"){
            echo "<div>Data gagal disimpan</div>";
          }
          else{
            
          //   echo "
          //   <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
          //   <symbol id='check-circle-fill' viewBox='0 0 16 16'>
          //     <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
          //   </symbol>
          //   <div class='alert alert-success d-flex align-items-center text-center'>
          //   <svg class='bi flex-shrink-0 me-2' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
          //     <div>Data berhasil disimpan</div>
          //   </div>";
            
          // }
            echo "<div class='alert alert-success text-center alert-dismissible fade show'>Data berhasil disimpan
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
          }
        }
      ?>
      <div class="card">
        <div class="card-header fw-bold">
        Profile
        </div>
        <div class="card-body">
          <div class="row justify-content-evenly">
            <div class="col-3 mt-3">
              <div class="image overflow-hidden d-flex justify-content-center">
                <img src='<?php echo $_SERVER["DOCUMENT_ROOT"]."fotoprofile/" .$data["fotoprofile"]; ?>' alt="" width="250" style="border-radius: 10%"/>
              </div>
                <div class="d-flex justify-content-center ">
              </div>
              <div class="d-flex justify-content-center mt-3">
                <span class="badge text-bg-success py-2 px-4">Aktif</span>
              </div>
            </div>

            <div class="col-3 mt-2">
              <div class="">
                <label for="staticEmail" class=" col-form-label fw-bold">NIM Mahasiswa</label>
                  <input type="text" readonly class="form-control form-control-sm border bg-light text-secondary" id="staticEmail" value="<?php echo $data["nim"]; ?>">
              </div>
              <div class="">
                <label for="staticEmail" class=" col-form-label fw-bold">Nama Mahasiswa</label>
                  <input type="text" readonly class="form-control form-control-sm border bg-light text-secondary" id="staticEmail" value="<?php echo $data["nama"]; ?>">
              </div>
              <div class="">
                <label for="staticEmail" class=" col-form-label fw-bold">Angkatan</label>
                  <input type="text" readonly class="form-control form-control-sm border bg-light text-secondary" id="staticEmail" value="<?php echo $data["angkatan"]; ?>">
              </div>
              <div class="">
                  <label for="prodi" class=" col-form-label fw-bold">Prodi</label>
                    <input type="text" readonly class="form-control form-control-sm border bg-light text-secondary" id="prodi" value="Informatika">
              </div>
              <div class="">
                <label for="fakultas" class=" col-form-label fw-bold">Fakultas</label>
                  <input type="text" readonly class="form-control form-control-sm border bg-light text-secondary" id="prodi" value="Sains dan Matematika">
              </div>
              <button type="submit" class="btn btn-primary mt-4 shadow" value="submit" onclick="location.href='srs2edit.php'">Edit</button>
              <button type="button"  class="btn btn-warning mt-4 shadow" onclick="location.href='srs10.php'">Kembali</button>
            </div>

            <div class="col-3 mt-3">
              <div class="">
                <label for="NoHp" class="form-label fw-bold" >Nomor Handphone</label>
                <input type="text" readonly class="form-control form-control-sm bg-light text-secondary" id="nomor_telp" name="nomor_telp"  value="<?php echo $data["nomor_telp"]; ?>">
              </div>
              <div class="mt-2">
                <label for="alamat" class="form-label fw-bold">Alamat</label>
                <input type="text" readonly class="form-control form-control-sm bg-light text-secondary" id="alamat" name="alamat" value="<?php echo $data["alamat"];?>">
              </div>
              <div class="mt-1">
                <label for="provinsi" class="form-label fw-bold">Provinsi</label>
                <input type="text" readonly class="form-control form-control-sm bg-light text-secondary" id="provinsi" name="provinsi" value="<?php 
                $query2 = $db->query("SELECT provinsi.nama from provinsi INNER JOIN mahasiswa ON mahasiswa.kode_prov=provinsi.kode_prov where mahasiswa.nim='$noinduk'");
                $data1 =mysqli_fetch_assoc($query2);
                echo $data1["nama"] ?>">

              </div>
              <div class="mt-1">
                <label for="kota" class="form-label fw-bold">Kabupaten/Kota</label>
                <input type="text" readonly class="form-control form-control-sm bg-light text-secondary" id="provinsi" name="provinsi" value="<?php 
                $query3 = $db->query("SELECT kabupaten.nama from kabupaten INNER JOIN mahasiswa ON mahasiswa.kode_kab=kabupaten.kode_kab where mahasiswa.nim='$noinduk'");
                $data2 =mysqli_fetch_assoc($query3);
                echo $data2["nama"] ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('Footer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
  </body>
</html>