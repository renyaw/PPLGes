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
    <?php
    require_once "db_login.php";
    include('navbar.php');
    $noinduk = $_SESSION["noinduk"];
    $query = $db->query("SELECT * from mahasiswa where nim='$noinduk'");
    $data = mysqli_fetch_assoc($query);
    ?>
    <?php
      if (isset($_POST['submit'])) {
          $nomor_telp = test_input($_POST['nomor_telp']);
          $alamat = test_input($_POST['alamat']);
          $kab = $_POST['kabupaten'];
          //$jurusan = test_input($_POST['jurusan']);
          
          $result = $db->query("UPDATE mahasiswa set nomor_telp='$nomor_telp', alamat='$alamat', kode_kab='$kab' where nim='$noinduk'");

          if ($result):
          ?>
              <div class="alert alert-success">Data berhasil disimpan</div>
          <?php else: ?>
              <div class="alert alert-error">Data gagal disimpan <?php echo $db->error ?></div>
          <?php
          endif;
      }
    ?>

    <div class="container mt-4">
      <h2>Update Data Pribadi</h2>
      <div class="alert alert-warning pt-2 pb-1 col-11" role="alert">
        <h5>Peringatan!</h5>
        <p>Lakukan update data pribadi untuk menggunakan fitur lain.</p>
      </div>
      <div class="row">
        <div class="col-3 mt-3">
          <div class="image overflow-hidden d-flex justify-content-center">
            <img class="rounded" src='<?php echo "fotoprofile/" .$data["fotoprofile"]; ?>' alt="" width="250" />
          </div>
            <div class="d-flex justify-content-center ">
            <a href="" class=""><button type="button" class="btn btn-warning px-5 mt-2 text-white" style="width: 250px; background-color:#FF8064;">Ubah Foto</button></a>
            </div>
            <div class="d-flex justify-content-center mt-3">
              <span class="badge text-bg-success py-2 px-4">Aktif</span>
            </div>
            
        </div>

        <div class="col-3 mt-2">
        <form method="POST" onsubmit="" name="form">
        <div class="">
          <label for="staticEmail" class=" col-form-label fw-bold">NIM Mahasiswa</label>
            <input type="text" readonly class="form-control-plaintext form-control-sm border bg-light text-secondary" id="staticEmail" value="<?php echo "&nbsp;" .$data["nim"]; ?>">
        </div>
        <div class="">
          <label for="staticEmail" class=" col-form-label fw-bold">Nama Mahasiswa</label>
            <input type="text" readonly class="form-control-plaintext form-control-sm border bg-light text-secondary" id="staticEmail" value="<?php echo "&nbsp;" .$data["nama"]; ?>">
        </div>
        <div class="">
          <label for="staticEmail" class=" col-form-label fw-bold">Angkatan</label>
            <input type="text" readonly class="form-control-plaintext form-control-sm border bg-light text-secondary" id="staticEmail" value="<?php echo "&nbsp;" .$data["angkatan"]; ?>">
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

        <div class="col-4 mt-3">
          <div class="">
            <label for="NoHp" class="form-label fw-bold" >Nomor Handphone</label>
            <input type="text" class="form-control form-control-sm" id="nomor_telp" name="nomor_telp"  value="<?php echo $data["nomor_telp"]; ?>">
          </div>
          <div class="mt-2">
            <label for="alamat" class="form-label fw-bold">Alamat</label>
            <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" value="<?php echo $data["alamat"]; ?>">
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
            <option value="<?php echo $data["kode_kab"]; ?>"><?php echo $data["kode_kab"]; ?>
            </option>
            </select>
            
          </div>
        </form>
        </div>
      </div>
    </div>
    <br>
      <br>
    </div>
    <?PHP
    include('Footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>