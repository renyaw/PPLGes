<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <link rel="shortcut icon" href="https://kulon2.undip.ac.id/pluginfile.php/1/theme_moove/favicon/1660361299/undip.ico" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    <style>
      body {
        font-family: "Inter";
        font-size: 22px;
      }
    </style>
    <title>Dashboard Mahasiswa</title>
    <script src="https://unpkg.com/htmlincludejs"></script>
  </head>

  <body class="bg-light">
    <?php
    session_start();
    require_once('db_login.php');
    ?>

    <include src="navbar.php"></include>
    <div class="container p-4 bg-white">
      <h2 class="fw-bold">Dashboard Mahasiswa</h2>
      <hr />
      <?php
      if(isset($_GET['pesan'])){
        //ucapan selamat login
        $noinduk = $_SESSION['noinduk'];
        $query = $db->query("SELECT nama FROM mahasiswa where nim ='$noinduk'");
        $data=mysqli_fetch_assoc($query);

        if($_GET['pesan']=="sukses"){
          echo "<div class='alert alert-success text-center alert-dismissible fade show' role='alert'>Anda Berhasil Login Sebagai <wbr>". $data['nama']."
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }
        if($_GET['pesan']=="suksesupload"){
          echo "<div class='alert alert-success text-center alert-dismissible fade show' role='alert'>IRS Berhasil Diupload
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }
      }
    ?>
      <div class="row mt-1 pe-3">
        <div class="col-md-6">
          <div class="col-md border bg-light pt-4">
            <div class="row">
              <div class="col-md-4 px-3 pb-3 pt-1 ps-4">
                <?php
                $noinduk = $_SESSION['noinduk'];
                $poto = $db->query("SELECT * from mahasiswa where nim = '$noinduk'") ;
                $d= mysqli_fetch_assoc($poto);
                ?>
                <img  src='<?php echo "fotoprofile/".$d["fotoprofile"]; ?>'style='width: 100%;border-radius:5%' />
              </div>
              <div class="col-md-8">
                <?php
                  $noinduk = $_SESSION['noinduk'];
                  $query = $db->query("SELECT * FROM mahasiswa where nim ='$noinduk'");
                  $query2= $db->query("SELECT khs.status FROM khs inner join mahasiswa ON mahasiswa.nim=khs.nim where mahasiswa.nim = '$noinduk'");
                  $data=mysqli_fetch_assoc($query);
                  $data2=mysqli_fetch_assoc($query2);
            
                  echo "<p class='fw-bold'>". $data['nama']."</p>";
                  echo "<p>". $data['nim'] ."</p>";
                  echo "<p>S1 Informatika</p>";
                  echo "<p>Fakultas Sains dan Matematika</p>";
                  if($data2['status']='A'){
                    echo "<p class='fw-bold' style='color: #52ff63'>Aktif</p>";
                  }
                ?>

              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 border bg-light">
          <div class="row justify-content-evenly mt-2">
            <div class="col-md-5">
              <div class="card border rounded-0 shadow-sm">
                <div class="card-body text-center" style="background: linear-gradient(180deg, #ffee54 0%, #ffffff 55%)">
                  <p class="fw-bold">IPK</p>
                  <?php
                  $query5=$db->query("SELECT cast(avg(ip_semester) as decimal(10,2)) as ipk  from mahasiswa,khs where mahasiswa.nim=khs.nim and mahasiswa.nim='$noinduk'");
                  $jml= mysqli_fetch_assoc($query5);
                  if(empty($jml['ipk'])){
                    echo '0';
                  }
                  else{ 
                    echo $jml['ipk'];
                  }
                  ?>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card border-1 rounded-0 shadow-sm">
                <div class="card-body text-center" style="background: linear-gradient(180deg, #52ff63 0%, #ffffff 55%)">
                  <p class="fw-bold">Semester</p>
                  <?php
                  //$query3 = $db->query("SELECT smt FROM khs INNER JOIN mahasiswa ON mahasiswa.nim=khs.nim where mahasiswa.nim = '$noinduk'");
                  $query3=$db->query("SELECT sks_kumulatif as sksk,smt from khs where sks_kumulatif in(select max(sks_kumulatif) from khs WHERE nim=$noinduk group by nim) and nim=$noinduk");
                  $data3=mysqli_fetch_assoc($query3);
                  if(empty($data3['smt'])){
                    echo '1';
                  }
                  else{
                    echo $data3['smt'];
                  }
                  
                  // $data3 = mysqli_fetch_assoc($query3);
                  // echo $data3['smt'];
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-evenly mt-4 mb-2">
            <div class="col-md-5">
              <div class="card border-1 rounded-0 shadow-sm">
                <div class="card-body text-center" style="background: linear-gradient(180deg, #6473ff 0%, #ffffff 55%)">
                  <p class="fw-bold">SKSk</p>
                  <?php
                  // $query4=$db->query("SELECT sks_kumulatif as sksk,smt from khs where sks_kumulatif in(select max(sks_kumulatif) from khs WHERE nim=$noinduk group by nim) and nim=$noinduk");
                  // $data3=mysqli_fetch_assoc($query4);
                  if(empty($data3['sksk'])){
                    echo '0';
                  }
                  else{
                    echo $data3['sksk'];
                  }
                  ?>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card border-1 rounded-0 shadow-sm">
                <div class="card-body text-center" style="background: linear-gradient(180deg, #ff5a5a 0%, #ffffff 55%)">
                  <p class="fw-bold">Dosen Wali</p>
                  <?php
                  $kodewali = $data['kode_wali'];
                  $query2 = $db->query("SELECT dosen.nama from dosen INNER JOIN mahasiswa ON mahasiswa.kode_wali=dosen.kode_wali where mahasiswa.nim = '$noinduk'");
                  $data2 = mysqli_fetch_assoc($query2);
                  echo $data2['nama'];
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3 pe-3">
        <div class="col-md-6">
          <div class="row">
            <div class="col-11 ms-3">
              <div class="row border bg-light">
                <div class="col-3">
                  <div class="card border-0 bg-transparent pt-1">
                    <img src="img/Accircle.png" style="max-width: max-content; max-height: max-content" />
                  </div>
                </div>
                <div class="col-9">
                  <a href="srs2tampil.php" class="text-dark">
                  <p class="fs-1 fw-bold mt-2">Profile</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 border py-2 bg-light">
          <div class="row justify-content-evenly">
            <div class="col-md-4">
              <a href="srs4.php">
                <div class="card border-0 shadow mt-2">
                  <div class="card-body text-center rounded-1" style="background: #ffee54">
                    <button class="fw-bold border-0 bg-transparent">KHS</button>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="srs6_belum.php">
                <div class="card border-0 shadow mt-2">
                  <div class="card-body text-center rounded-1" style="background: #52ff63;">
                    <button class="fw-bold border-0 bg-transparent">Skripsi</button>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="row justify-content-evenly mt-4 pb-2">
            <div class="col-md-4">
              <a href="srs3.php">
                <div class="card border-0 shadow mt-2">
                  <div class="card-body text-center rounded-1" style="background: #6473ff">
                    <button class="fw-bold border-0 bg-transparent">IRS</button>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="srs5_belum.php">
                <div class="card border-0 shadow mt-2">
                  <div class="card-body text-center rounded-1" style="background: #ff5a5a">
                    <button class="fw-bold border-0 bg-transparent">PKL</button>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white h-25">
      <br>
      <br>
      </div>
    </div>
    <?PHP
    include('Footer.php');
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
