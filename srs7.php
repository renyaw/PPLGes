<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SRS 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    <script src="https://unpkg.com/htmlincludejs"></script>
    <style>
      body {
        font-family: "Inter";
        font-size: 22px;
      }
      </style>
  </head>
  <body class="bg-light">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <include src="cobanavbardosen.php"></include>
    <div class="container p-4 bg-white">
      <?php
        session_start();
        if(isset($_GET['pesan'])){
          //salah akun/password
          if($_GET['pesan']=="gagal"){
            echo "<div>Gagal dikonfirmasi</div>";
          }
          else if($_GET['pesan']=="sukses"){
            echo "<div class='alert alert-success text-center alert-dismissible fade show'>Berhasil Dikonfirmasi
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
          }
          else if($_GET['pesan']=="suksestolak"){
            echo "<div class='alert alert-success text-center alert-dismissible fade show'>Berhasil Ditolak
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
          }
          else if($_GET['pesan']=="gagaltolak"){
            echo "<div>Gagal ditolak</div>";
          }
        }
        ?>
      <h2 class="mb-5 fw-bold">Verifikasi IRS Mahasiswa</h2>
      <div class="row">
        <div class="col-2 mt-2">
          <div class="card border border-5">
            <div class="card-body text-center" style="background-color: #ffee54">
              <a href="srs7.php"><button style="background-color: #ffee54; border: none; outline: none">IRS</button></a>
            </div>
          </div>
        </div>
        <div class="col-2 mt-2">
          <div class="card">
            <div class="card-body text-center" style="background-color: #ff5a5a">
              <a href="srs7khs.php"><button style="background-color: #ff5a5a; border: none; outline: none">KHS</button></a>
            </div>
          </div>
        </div>
        <div class="col-6 mx-auto mb-5">
          <div class="">
            <label for="doswal" class="form-label">Fakultas</label>
            <select class="form-select" aria-readonly="" aria-label="Default select example">
              <option selected disabled>Fakultas Sains dan Matematika</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-2 mt-2">
          <div class="card">
            <div class="card-body text-center" style="background-color: #52ff63">
              <a href="srs7pkl.php"><button style="background-color: #52ff63; border: none; outline: none">PKL</button></a>
            </div>
          </div>
        </div>
        <div class="col-2 mt-2">
          <div class="card">
            <div class="card-body text-center" style="background-color: #6473ff">
              <a href="srs7skripsi.php"><button style="background-color: #6473ff; border: none; outline: none">Skripsi</button></a>
            </div>
          </div>
        </div>
        <div class="col-6 mx-auto">
          <div class="">
            <label for="doswal" class="form-label">Program Studi</label>
            <select class="form-select" aria-readonly="" aria-label="Default select example">
              <option selected disabled>Informatika</option>
            </select>
          </div>
        </div>
      </div>
      <div class="container p-4 bg-white">
        <div class="mt-5">
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
            <th scope="col">smt</th>
            <th scope="col">File IRS</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider text-center">
          <?php
          require_once('db_login.php');
          $kodewali= $_SESSION['kodewali'];
          $query=$db->query("SELECT mahasiswa.nim, mahasiswa.nama, file_sks, semester_aktif as smt from mahasiswa,irstemp,dosen where mahasiswa.nim=irstemp.nim and mahasiswa.kode_wali='$kodewali' group by nim" );
          while($row=$query->fetch_object()){
            echo '<tr>';
            echo '<td>'.$row->nama.'</td>';
            echo '<td>'.$row->nim.'</td>';
            echo '<td>'.$row->smt.'</td>';
            echo '<td>';
            echo '<a href="fileirs/'.$row->file_sks.'" target="_blank">';
            echo $row->file_sks;
            echo '</a>';
            echo '</td>';
            echo '<td><a class="btn btn-success btn-sm" href="srs7konfirmasiirs.php?id='.$row->nim.'">Terima</a>&nbsp;&nbsp;
            <a class="btn btn-danger btn-sm" href="srs7tolakirs.php?id='.$row->nim.'">Tolak</a>
            </td>';
            echo '</tr>';
          }
          ?>
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
