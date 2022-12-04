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
  <include src="navbaroperator.php"></include>
    <?php
    //Cek apakah sudah login atau belum
    session_start();
    require_once "db_login.php";
    
    if (isset($_GET["pesan"])) {
      if ($_GET["pesan"] == "success") {
          echo "<div class='alert alert-success text-center'>Data Berhasil tersimpan</div>";
      }
    }
    
    if (isset($_POST["submit"])) {
      //untuk foto
      $ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];

      //untuk data lainnya
      $nama1= test_input($_POST["nama"]);
      $nim = test_input($_POST["nim"]);
      $email = test_input($_POST["email"]);
      $angkatan = test_input($_POST["angkatan"]);
      $jalur = test_input($_POST["jalur_masuk"]);
      $wali = test_input($_POST["kode_wali"]);
      $ux = explode('@',$email);
      $username = current($ux);
      $_SESSION['nimbaru'] = $nim; 
      if(empty($nama)){
        $result2 = "INSERT INTO mahasiswa(nim,nama,angkatan,email,jalur_masuk,kode_prov, kode_kab,kode_wali) VALUES ('$nim','$nama1', '$angkatan','$email', '$jalur','0','000', '$wali');";
        $result2 .= "INSERT INTO user VALUES ('$nim','$username', '2', '1234')";
        if ($db->multi_query($result2)== TRUE){
          $_SESSION['nim'] = $nim; 
          header("location:srs1pt2.php");
        }else{
          header("location:srs1.php?pesan=gagal");
        }
      }else{
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
          if($ukuran < 1044070){			
            move_uploaded_file($file_tmp, 'fotoprofile/'.$nama);
            $result3 = "INSERT INTO mahasiswa(nim,nama,fotoprofile,angkatan,email,jalur_masuk,kode_prov, kode_kab, kode_wali) VALUES ('$nim','$nama1','$nama', '$angkatan','$email', '$jalur', '0','000','$wali');";
            $result3 .= "INSERT INTO user VALUES ('$nim','$username', '2', '1234')";
            //$query = $db->query("UPDATE upload  set nama_file='$nama' where id_file=9");
            if($db->multi_query($result3)== TRUE){
              header("location:srs1pt2.php");
            }
            else{
              echo 'GAGAL MENGUPLOAD GAMBAR';
            }
          }
          else{
            echo 'UKURAN FILE TERLALU BESAR';
          }
        }
        else{
          echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
      }
    }
    
    ?>

    <div class="container mt-4 py-5 bg-white">
    <h2 class="fw-bold">Data Diri</h2>
      <div name="garishr" class="row border border-dark my-3 mx-1"></div>
      <div class="card">
        <div class="card-header fw-bold">
          Masukkan Data Mahasiswa
        </div>
        <div class="card-body">
        <form method="POST" name="form" autocomplete="on" enctype="multipart/form-data">
        <div class="container px-5 pt-4 pb-5 bg-white">
          <div class="row justify-content-evenly">
            <div class="col-4 mt-3">
              <div class="image overflow-hidden">
                  <img class="" src="img\default.png" alt="" width="250" />
              </div>
              <div class="d-flex">
                <!-- Modal trigger button -->
                <button type="button" class="btn btn-secondary px-5 mt-2 text-white" style="width: 250px; " data-bs-toggle="modal" data-bs-target="#modalId">
                  Tambah foto
                </button>
                <!-- Modal Body -->
                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Upload Foto Profile</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <input type="file" name="file" value="">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6">
            <form method="POST" name="form" autocomplete="on">
              <div class="mb-3 mt-3">
              <label for="nama" class="form-label">Nama Mahasiswa:</label>
                <input type="text" class="form-control" placeholder="Nama Mahasiswa" id="nama" name="nama">
              </div>
              <div class="mb-3 mt-3">
              <label for="nim" class="form-label">Nim Mahasiswa:</label>
                <input type="text" class="form-control" placeholder="Nim Mahasiswa" id="nim" name="nim">
              </div>
              <div class="mb-3 mt-3">
              <label for="email" class="form-label">Email Mahasiswa:</label>
                <input type="text" class="form-control" placeholder="Email" id="email" name="email">
              </div>
              <div class="row">
              <div class=" col-6 mt-2">
              <label for="angkatan" class="form-label">Angkatan:</label>
                <select name="angkatan" id="angkatan" class="form-control form-control">
                  <option value="0">Pilih Angkatan</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                </select>
              </div>
              <div class=" col-6 mt-2">
              <label for="jalur_masuk" class="form-label">Jalur Masuk:</label>
                <select name="jalur_masuk" id="jalur_masuk" class="form-control form-control">
                    <option value="0">Pilih Jalur Masuk</option>
                    <option value="SNMPTN">SNMPTN</option>
                    <option value="SBMPTN">SBMPTN</option>
                    <option value="Mandiri">Mandiri</option>
                </select>
              </div>
              </div>
              <div class="mb-3 mt-4">
              <label for="wali" class="form-label">Nama Wali:</label>
                <select name="kode_wali" id="kode_wali" class="form-control form-control">
                  <option value="E0">-- Pilih Nama Wali --</option>
                  <?php
                    require_once "db_login.php";
                    $result = $db->query("select * from dosen");
                    while ($kode = $result->fetch_object()): ?>
                        <option value="<?php echo $kode->kode_wali; ?>">
                          <?php echo $kode->nama; ?>
                        </option>
                  <?php endwhile;
                  ?>
                </select>
              </div>
              <button type="submit" class="btn btn-primary mt-4" name="submit">Submit</button>
              <button type="button"  class="btn btn-warning mt-4 shadow" onclick="location.href='srs9.php'">Kembali</button>
        </form>
            </div>
          </div>
        </div>
        
      </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <?PHP
    include('Footer.php');
    ?>
  </body>
</html>