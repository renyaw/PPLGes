<!DOCTYPE html>
<php lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Dosen Wali</title>
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
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <include src="cobanavbardosen.php"></include>
    <?php
    session_start();
        require_once($_SERVER["DOCUMENT_ROOT"].'/db_login.php');
    ?>    ?>

    <div class="container">
      <h2 class="fw-bold">Dashboard Dosen Wali</h2>
        <hr />
      <div class="row justify-content-between">
        <div class="col-md-5 border bg-light">
          <div class="card mb-3 bg-transparent border-0" style="max-width: 540px; background-color: #f1f1f1">
            <div class="row g-0">
              <div class="col-md-4 mx-auto my-auto">
                <img src="img\bebekbulet.png" class="img-fluid rounded-start mx-auto" alt="bebek" style="width: 90%" />
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <?php
                  $noinduk = $_SESSION['noinduk'];
                  $kodewali = $_SESSION['kodewali'];
                  $query = $db->query("SELECT * from dosen where nip = '$noinduk'");

                  $data = mysqli_fetch_assoc($query);

                  echo "<p class='fs-4 fw-bolder'>".$data['nama'] ."</p>";
                  echo "<p>". $noinduk."</p>";
                  echo "<p >Kode Wali: ".$data['kode_wali'] ."</p>";
                  echo "<p>Dosen Wali Informatika</p>";
                  echo "<p>Fakultas Sains dan Matematika</p>";

                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 border bg-light py-3">
          <div class="row justify-content-evenly">
            <div class="col-5">
              <div class="card" style="background-color: #84ffff">
                <div class="card-body">
                  <?php
                    $query = $db->query("SELECT * from mahasiswa inner join dosen ON  mahasiswa.kode_wali=dosen.kode_wali WHERE mahasiswa.kode_wali = '$kodewali' ");
                    echo $query->num_rows;
                  ?>
                  <p>Mahasiswa Perwalian Aktif</p>
                </div>
              </div>
            </div>
            <div class="col-5">
              <div class="card" style="background-color: #97ff95">
                <div class="card-body">
                  <?php
                    $query = $db->query("SELECT * from mahasiswa inner join dosen inner join pkl where mahasiswa.kode_wali = dosen.kode_wali and mahasiswa.nim=pkl.nim and pkl.stat='belum lulus' and mahasiswa.kode_wali = '$kodewali'");
                    echo $query->num_rows;
                  ?>
                  <p>Mahasiswa Perwalian PKL</p>
                </div>
              </div>
            </div>            
          </div>
          <div class="row justify-content-evenly mt-2">
            <div class="col-5">
              <div class="card " style="background-color: #fdff8f">
                <div class="card-body">
                  <?php
                    $query = $db->query("SELECT * from mahasiswa inner join dosen inner join skripsi where mahasiswa.kode_wali = dosen.kode_wali and mahasiswa.nim=skripsi.nim and skripsi.status='belum lulus' and mahasiswa.kode_wali = '$kodewali'");
                    echo $query->num_rows;
                  ?>
                  <p>Mahasiswa Perwalian Skripsi</p>
                </div>
              </div>
            </div>
            <div class="col-5">
              <div class="card " style="background-color: rgba(255, 115, 115, 0.74)">
                <div class="card-body">
                <?php
                    $query = $db->query("SELECT * from mahasiswa inner join dosen inner join khs where mahasiswa.kode_wali = dosen.kode_wali and mahasiswa.nim=khs.nim and (khs.status='Mangkir' or khs.status='Cuti') and mahasiswa.kode_wali = '$kodewali'");
                    echo $query->num_rows;
                  ?>
                  <p>Mahasiswa Non-Aktif</p>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>

      <div class="row justify-content-evenly mt-4 border bg-light p-3">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body text-center" style="background-color: #27aed9">
              <a href="srs7.php"><button style="background-color: #27aed9; border: none; outline: none">Verifikasi IRS Mahasiswa</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body text-center" style="background-color: #ffee54">
              <a href="srs7khs.php"><button style="background-color: #ffee54; border: none; outline: none">Verifikasi KHS Mahasiswa</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center" style="background-color: #95ffb3">
            <div class="card-body text-center">
              <a href="srs7pkl.php"><button style="background-color: #95ffb3; border: none; outline: none">Verifikasi Mahasiswa PKL</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center" style="background-color: #ff7373">
            <div class="card-body text-center">
              <a href="srs7skripsi.php"><button style="background-color: #ff7373; border: none; outline: none">Verifikasi Mahasiswa Skripsi</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br />
    <div class="bg-white">
      <br>
      <br>
    </div>
    <?PHP
    include('Footer.php');
    ?>
  </body>
</php>
