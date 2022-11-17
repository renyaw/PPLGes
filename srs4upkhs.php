<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Upload KHS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    <style>
      body {
        font-family: "Inter";
        font-size: 22px;
      }
    </style>
    <script src="https://unpkg.com/htmlincludejs"></script>
  </head>
  <body class="bg-light">
    <?php
    session_start();
    require_once('db_login.php');
    $noinduk=$_SESSION['noinduk'];
    $query=$db->query("SELECT mahasiswa.nama, nim, angkatan, dosen.nama as namadsn, fotoprofile From mahasiswa,dosen where mahasiswa.kode_wali=dosen.kode_wali and nim='$noinduk' ");
    $data=mysqli_fetch_assoc($query);
    
    $query2=$db->query("SELECT cast(avg(ip_semester) as decimal(10,2)) as ipk  from mahasiswa,khs where mahasiswa.nim=khs.nim and mahasiswa.nim='$noinduk'");
    $jml= mysqli_fetch_assoc($query2);

    $query3=$db->query("SELECT sks_kumulatif as sksk,smt from khs where sks_kumulatif in(select min(sks_kumulatif) from khs WHERE nim=$noinduk group by nim) and nim=$noinduk");
    $data2=mysqli_fetch_assoc($query3);
    
    if (isset($_POST["submit"])) {
      //filekhs
      $ekstensi_diperbolehkan	= array('pdf');
      $namafile = $_FILES['file']['name'];
      $x = explode('.', $namafile);
      $ekstensi = strtolower(end($x));
      $ukuran	= $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];
    
      //untuk data lainnya
      $ips = test_input($_POST["ipsemester"]);
      $sks = test_input($_POST["sks"]);
      $sksk = $data2['sksk']+$sks;
      $smt = test_input($_POST["semester"]);
      $ipk1= ($jml['ipk']+$ips)/2;
      $ipk= number_format((float)$ipk1, 2, '.', '');

      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){			
          move_uploaded_file($file_tmp, 'filekhs/'.$namafile);
          $result = $db->query("INSERT INTO khstemp values(null,'$smt','Aktif','','$ips','$ipk','$namafile','$sksk','$noinduk')");
          if($result){
            header("location:srs10.php?pesan=suksesupload");
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
    ?>
    <include src="navbar.php"></include>
    <div class="container p-5 bg-white">
      <h2 class="fw-bold">Entry KHS</h2>
      <hr />
      <div class="row justify-content-evenly">
        <div class="col-8">
          <div class="card bg-light px-5 pb-5 pt-4 mt-5">
            <h2 class="fw-bold">Profile</h2>
            <hr />
            <div class="row justify-content-between">
              <div class="col-3">
                <div class="card bg-transparent border-0 mx-auto">
                  <img src="<?php echo "fotoprofile/" .$data["fotoprofile"]; ?>" style="border-radius:5%"class="img-fluid" />
                </div>
                <div class="card text-center mt-3 mx-auto bg-success text-white" style="width: 14vh; max-width: 100px">Aktif</div>
              </div>
              <div class="col-8">
                <div class="row mt-4">
                  <div class="col-6">
                    <h3 class="fw-bold">Nama</h3>
                    <p><?php echo $data['nama'] ?></p>
                  </div>
                  <div class="col-6">
                    <h3 class="fw-bold">NIM</h3>
                    <p><?php echo $data['nim']?></p>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-6">
                    <h3 class="fw-bold">Angkatan</h3>
                    <p><?php echo $data['angkatan']?></p>
                  </div>
                  <div class="col-6">
                    <h3 class="fw-bold">Dosen Wali</h3>
                    <p><?php echo $data['namadsn']?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card bg-light px-5 pb-5 pt-4 mt-5">
            <h2 class="fw-bold text-center">&#x1F3C6; Prestasi</h2>
            <hr />
            <div class="row mt-4">
              <h2 class="text-center fw-bold"><u>IPK</u></h2>
              <p class="text-center">
                <?php 
                if(empty($jml['ipk'])){
                  echo '0';
                }
                else{ 
                  echo $jml['ipk'];
                }
                ?>
              </p>
            </div>
            <div class="row mt-4 mb-5">
              <h2 class="text-center fw-bold fw"><u>SKS</u></h2>
              <p class="text-center">
                <?php 
                if(empty($data2['sksk'])){
                  echo '0';
                }
                else{
                  echo $data2['sksk'];
                } 
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      
      <form method="POST" onsubmit="" name="form" enctype="multipart/form-data">
        <div class="card mt-5 p-5 bg-light">
        <div class="row">
            <h3 class="fw-bold">Semester</h3>
          </div>
          <div class="row mx-2">
            <input type="text" name="semester" id="semester" class="border rounded-2 fw-bold" readonly style="background-color: rgb(178, 178, 178)"  value="<?php if(empty($data2['smt'])){echo '1';} else{echo $data2['smt'];} ?>" />
          </div>
          <div class="row mt-4">
            <h3 class="fw-bold">IP Semester</h3>
          </div>
          <div class="row mx-2">
            <input type="text" name="ipsemester" id="ipsemester" class="border rounded-2" style="background-color: rgb(178, 178, 178)" placeholder="Masukan IP Semester ini..." />
          </div>
          <div class="row mt-4">
            <h3 class="fw-bold">SKS Semester</h3>
          </div>
          <div class="row mx-2">
            <input type="text" name="sks" id="sks" class="border rounded-2" style="background-color: rgb(178, 178, 178)" placeholder="Masukan jumlah SKS yang diambil semester ini..." />
          </div>
          <div class="row mt-4">
            <h3 class="fw-bold ">Upload Scan KHS</h3>
          </div>
          <div class="row">
            <input type="file" name="file" class="ms-2" />
          </div>
          <div class="row align-self-end">
            <div class="col-2 me-1">
              <button type="submit" name="submit" id="submit" class="rounded btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <?PHP
    include('Footer.php');
    ?>
  </body>
</html>
