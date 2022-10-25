<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KHS</title>
    <link rel="stylesheet" href="srs4.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://unpkg.com/htmlincludejs"></script>
  </head>
  <body>
    <?php
    session_start();
    require_once('db_login.php');
    ?>
    <include src="navbar.php"></include>
    <div class="container">
      <h3>Kartu Hasil Studi (KRS)</h3>      
      <?php
      $noinduk=$_SESSION['noinduk'];
      $query = $db->query("SELECT khs.smt, khs.ip_semester, khs.sks_kumulatif from khs where nim = '$noinduk' order by smt");
      $query2= $db->query("SELECT angkatan from mahasiswa where nim ='$noinduk'");
      $data=mysqli_fetch_assoc($query2);
      while($row=$query->fetch_object()){
        // echo '<a href="srs4.php?pesan='.$row->smt.'" style="text-decoration:none">';
        echo "<div class='card my-3' style='background-color:#BFF2E9'>";
        echo '<div class="d-grid py-2" >';
        
        echo '<button class="btn text-start"  style="background-color:#BFF2E9" type="button">Semester '.$row->smt.' | Tahun akademik 2020/2021';
        echo "<hr>IP Semester : ".$row->ip_semester;
        echo "<br>Jumlah SKS : ".$row->sks_kumulatif;
        echo '</button>';
        
        echo '</div>';
        echo '</div>';
        // echo '</a>';
        // if(isset($_GET['pesan'])){
        //   //salah akun/password
        //   if($_GET['pesan']==$row->smt){
        //     echo "<div class='alert alert-danger text-center'>Kredensial masukmu tak cocok dengan akun<br> dalam sistem kami!</div>".$row->smt;
        //   }
        // }
      }
      ?>

<!-- <p class="informatika">Informatika</p>
    <p class="undiptulisan">universitas diponegoro</p>
    <p class="khs">Kartu Hasil Studi (KHS)</p>

    <rect class="smt1"></rect>
    <a href="srs4pt3.html"><button class="submit text-white fs-4">Entry KHS</button></a>

    <div class="teks">
      <div class="teks1">Semester 1 | Tahun akademik 2020/2021</div>
      <div class="teks2">Jumlah SKS : 20</div>
      <div class="teks3">IP Semester : 2.8</div>
      <div class="teks4">56/20</div>
      <div class="teks5">(SKS * Bobot)/Total SKS</div>
    </div> -->

      <!-- <div class="card my-3" style="background-color:#BFF2E9">
        <div class="d-grid py-2" >
          <button class="btn text-start"style="background-color:#BFF2E9" type="button">Semester 1 | Tahun akademik 2020/2021
            <hr>IP Semester : 4.00
            <br>Jumlah SKS : 20
          </button>
        </div>
      </div>
      <div class="card my-3" style="background-color:#BFF2E9">
        <div class="d-grid py-2" >
          <button class="btn text-start"style="background-color:#BFF2E9" type="button">Semester 2 | Tahun akademik 2020/2021
            <hr>IP Semester : 4.00
            <br>Jumlah SKS : 20
          </button>
        </div>
      </div>
      <div class="card my-3" style="background-color:#BFF2E9">
        <div class="d-grid py-2" >
          <button class="btn text-start"style="background-color:#BFF2E9" type="button">Semester 3 | Tahun akademik 2020/2021
            <hr>
            IP Semester : 4.00
            <br>Jumlah SKS : 20
          </button>
        </div>
      </div>
      <div class="card my-3" style="background-color:#BFF2E9">
        <div class="d-grid py-2" >
          <button class="btn text-start"style="background-color:#BFF2E9" type="button">Semester 4 | Tahun akademik 2020/2021
            <hr>IP Semester : 4.00
            <br>Jumlah SKS : 20
          </button>
        </div>
      </div>
      <div class="card my-3" style="background-color:#BFF2E9">
        <div class="d-grid py-2" >
          <button class="btn text-start"style="background-color:#BFF2E9" type="button">Semester 5 | Tahun akademik 2020/2021
            <hr>IP Semester : 4.00
            <br>Jumlah SKS : 20
          </button>
        </div>
      </div> -->
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
