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
  <body>
    <?php include "navbar.php"; ?>
    <?php
    require_once "db_login.php";

    $noinduk = $_SESSION["noinduk"];
    $query = $db->query("SELECT * from mahasiswa where nim='$noinduk'");
    $data = mysqli_fetch_assoc($query);
    ?>

    <?php if (isset($_POST["submit"])) {
      //untuk foto
      $ekstensi_diperbolehkan	= array('png','jpg','pdf');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];

      //untuk data lainnya
      $nomor_telp = test_input($_POST["nomor_telp"]);
      $alamat = test_input($_POST["alamat"]);
      $kab = $_POST["kabupaten"];
      if(empty($nama)){
        $result2 = $db->query("UPDATE mahasiswa set nomor_telp='$nomor_telp', alamat='$alamat', kode_kab='$kab' where nim='$noinduk'");
        header("location:srs2tampil.php?pesan=sukses");
      }
      else{
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
          if($ukuran < 1044070){			
            move_uploaded_file($file_tmp, 'fotoprofile/'.$nama);
            $result = $db->query("UPDATE mahasiswa set fotoprofile='$nama', nomor_telp='$nomor_telp', alamat='$alamat', kode_kab='$kab' where nim='$noinduk'");
            //$query = $db->query("UPDATE upload  set nama_file='$nama' where id_file=9");
            if($result){
              header("location:srs2tampil.php?pesan=sukses");
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
    <form method="POST" onsubmit="" name="form" enctype="multipart/form-data">
      <div class="container mt-4">
        <h2 class="fw-bold">Update Data Pribadi</h2>
        <div name="garishr" class="row border border-dark my-3 mx-1"></div>
        <div class="alert alert-warning pt-2 pb-1 col-11" role="alert">
          <h5>Peringatan!</h5>
          <p>Lakukan update data pribadi untuk menggunakan fitur lain.</p>
        </div>
        <div class="card">
          <div class="card-header fw-bold">
            Profile
          </div>
          <div class="card-body">
            <div class="row justify-content-evenly mx-1 pt-1 pb-4">
              <div class="col-3 mt-3">
                <div class="image overflow-hidden d-flex justify-content-center">
                  <img style="border-radius:5%"src='<?php echo "fotoprofile/" .$data["fotoprofile"]; ?>' alt="" width="250" />
                </div>
                <div class="d-flex justify-content-center ">
                <!-- Modal trigger button -->
                <button type="button" class="btn btn-warning px-5 mt-2 text-white" style="width: 250px; background-color:#FF8064;" data-bs-toggle="modal" data-bs-target="#modalId">
                  Ubah foto
                </button>
                
                <!-- Modal Body -->
                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Upload Foto Profile Anda</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>Pastikan Foto Berukuran 4x6, berukuran kurang dari 5 mb, dan diberi nama "nim.jpg/png"
                        </p>
                        <input type="file" name="file" value="">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Optional: Place to the bottom of scripts -->
                <script>
                  const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                </script>
                
                </div>
                <div class="d-flex justify-content-center mt-3">
                  <span class="badge text-bg-success py-2 px-4">Aktif</span>
                </div>
              </div>

              <div class="col-8 ">
                <div class="row justify-content-evenly">   
                  <div class="col-5 ">
                    <div class="">
                      <label for="nim" class=" col-form-label fw-bold">NIM Mahasiswa</label>
                        <input type="text" readonly class="form-control-plaintext form-control-sm border bg-light text-secondary" id="staticEmail" value="<?php echo "&nbsp;" .
                            $data["nim"]; ?>">
                    </div>
                    <div class="">
                      <label for="staticEmail" class=" col-form-label fw-bold">Nama Mahasiswa</label>
                        <input type="text" readonly class="form-control-plaintext form-control-sm border bg-light text-secondary" id="staticEmail" value="<?php echo "&nbsp;" .
                            $data["nama"]; ?>">
                    </div>
                    <div class="">
                      <label for="staticEmail" class=" col-form-label fw-bold">Angkatan</label>
                        <input type="text" readonly class="form-control-plaintext form-control-sm border bg-light text-secondary" id="staticEmail" value="<?php echo "&nbsp;" .
                            $data["angkatan"]; ?>">
                    </div>
                    <div class="">
                        <label for="prodi" class=" col-form-label fw-bold">Prodi</label>
                          <input type="text" readonly class="form-control-plaintext form-control-sm border bg-light text-secondary" id="prodi" value=" Informatika">
                      </div>
                      <div class="">
                        <label for="fakultas" class=" col-form-label fw-bold">Fakultas</label>
                          <input type="text" readonly class="form-control-plaintext form-control-sm border bg-light text-secondary" id="prodi" value=" Sains dan Matematika">
                      </div>
                    <button type="submit" name="submit" class="btn btn-primary mt-4 shadow" value="submit">Simpan</button>
                  </div>
                  <div class="col-5 ">
                    <div class="">
                      <label for="NoHp" class="form-label fw-bold" >Nomor Handphone</label>
                      <input type="text" class="form-control form-control-sm" id="nomor_telp" name="nomor_telp"  value="<?php echo $data[
                          "nomor_telp"
                      ]; ?>">
                    </div>
                    <div class="mt-2">
                      <label for="alamat" class="form-label fw-bold">Alamat</label>
                      <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" value="<?php echo $data[
                          "alamat"
                      ]; ?>">
                    </div>
                    <div class="mt-1">
                      <label for="provinsi" class="form-label fw-bold">Provinsi</label>
                      <select name="provinsi" id="provinsi" class="form-control form-control-sm " >
                      <option value="">
                      </option>
                      </select>
                    </div>
                    <div class="mt-1">
                      <label for="kota" class="form-label fw-bold">Kabupaten/Kota</label>
                      <select name="kabupaten" id="" class="form-control form-control-sm">
                      <option value="<?php echo $data[
                          "kode_kab"
                      ]; ?>"><?php echo $data["kode_kab"]; ?>
                      </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>

      </div>
    </form> 

    <div>
    <br>
      <br>
    </div>
    <?php include "Footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>