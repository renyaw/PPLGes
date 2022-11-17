<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PKL</title>
    <script src="https://unpkg.com/htmlincludejs"></script>
    <link rel="stylesheet" href="srs15.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
  </head>
  <body class="body">
    <script src="ajax1.js"></script>
    <include src="navdep.html"></include>
    <?php
    session_start();
    require_once('db_login.php');
    ?>
    <div class="container p-4 bg-white">
      <h3 class="mt-3 fw-bold">Rekap Data PKL</h3>
      <div name="garishr" class="row border border-dark my-3 mx-1"></div>
      <div class="d-grid gap-2 mt-5 d-md-block">
        <div class="container bg-light border py-2">
        <button class="btn btn-outline-secondary" type="button" onclick="showPKL('x');showPKLbelum('x');showHeader('x');">Semua</button>
        <?php
        $query = $db->query("SELECT angkatan FROM mahasiswa where nim in(SELECT max(nim) FROM mahasiswa group by angkatan) order by angkatan");
        while($row=$query->fetch_object()){
          echo "<button class='btn btn-outline-secondary mx-1' id='angkatan' value='$row->angkatan' onclick='showPKL($row->angkatan);showPKLbelum($row->angkatan);showHeader($row->angkatan);'>".$row->angkatan."</button>";
        }
        ?>
        </div>
      <div class="card mt-3 bg-light rounded-0">
        <div class="text-center mt-4">
          <h2  class="fw-bold"id="detail_header">Keseluruhan</h2>
        </div>
        <div class="row">
          <div class="col-md-4 mx-auto mt-5">
            <div class="card" style="background-color: #92ff80; height: 200px">
            <div></div>
              <div class="card-body text-center">
                <br />
                <h3 id='detail_pkl'></h3>
                <br> 
                <br>
                <h3 class="">Sudah PKL</h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 mx-auto mt-5">
            <div class="card" style="background-color: #ed8282; height: 200px">
              <div class="card-body text-center my-auto">
                <br />
                <h3 id='detail_pkl2'></h3>
                <h3>
                <?php
                  // $query2 = $db->query("SELECT COUNT(khs.nim) FROM khs, mahasiswa WHERE khs.status = '1' AND khs.nim = mahasiswa.nim AND mahasiswa.angkatan = '2017'");
                  // $data2 = mysqli_fetch_assoc($query2);
                  // echo $data['COUNT(khs.nim)'];
                ?>
                <br /><br />Belum PKL</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="container mt-5 mb-5">
          <div class="col d-flex justify-content-center">
            <a href="srs14_blm.php"><button type="button" class="btn btn-outline-primary mx-auto">Lihat Detail</button> </a>
          </div>
          <div class="col d-flex justify-content-center pt-2">
            <a href="srs12.php"><button type="button" class="btn btn-warning mx-auto">Kembali</button> </a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
      window.onload = function(){
        showPKL("x");
        showPKLbelum("x");
      }
    </script>
    <div class="bg-white">
      <br>
      <br>
    </div>
    <?PHP
    include('Footer.php');
    ?>
  </body>
</html>
