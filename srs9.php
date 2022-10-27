<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Operator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://unpkg.com/htmlincludejs"></script>
  </head>
  <body class="bg-light">
    <?php 
    session_start();
    require_once('db_login.php');
    ?>
    <div class="container bg-white px-3 ">
        <h3 class="mt-3 mb-3">Dashboard Operator</h3>
        <div class="row">
            <div class="col-md-6">
              <div class="card mb-3" style="max-width: 540px; background-color: #f1f1f1">
                <div class="row g-0">
                  <div class="col-md-4 mx-auto my-auto">
                    <div class="card-title mt-2">Profil</div>
                    <img src="img\bebekbulet.png" class="img-fluid rounded-start mx-auto mb-3" alt="bebek" style="width: 90%" />
                  </div>
                  <div class="col-md-7">
                    <div class="card-body">
                      <p class="card-title fs-4">Bensu</p>
                      <p class="card-text">Operator</p>
                      <p class="card-text">Fakultas Sains dan Matematika</p>
                      <p class="card-text">Informatika</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mx-auto">
                <div class="card" style="background-color: #84ffff">
                  <div class="card-body">
                    <div class="card-title">100</div>
                    <p>Mahasiswa Perwalian Aktif</p>
                  </div>
                </div>
      
                <div class="card mt-2 mb-5" style="background-color: #fdff8f">
                    <div class="card-body">
                        <div class="card-title">10</div>
                        <p>Mahasiswa Perwalian Skripsi</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-md-3">
                <div class="card" style="background-color: #97ff95">
                  <div class="card-body">
                    <div class="card-title">50</div>
                    <p>Mahasiswa Perwalian PKL</p>
                  </div>
                </div>
      
                <div class="card mt-2" style="background-color: rgba(255, 115, 115, 0.74)">
                  <div class="card-body">
                    <div class="card-title">5</div>
                    <p>Mahasiswa Non-Aktif</p>
                  </div>
                </div>
              </div>
            </div>

   <!-- Cari -->
   <div class="row">
   <div class="col-2 mt-5 ">
      <form action="" method="GET">
        <div class="input-group mb-3">
          <input type="text" name="search" value="<?php if(isset($_GET["search"])){echo $_GET['search'];}?>" class="form-control" placeholder="">
          <button type="submit" class="btn btn-outline-secondary">Cari</button>
        </div>
      </form>
    </div>
    </div>
    <?php
      //'max(khs.smt) dan group by nim' untuk mengambil smt tertinggi dari nim yang sama
      //'smt in (SELECT max(smt) FROM khs group by smt)' untuk mengambil apasaja data smt pada tabel khs, digunakan group by karena akan diambil max dari data smt yang duplikat
      //'where smt in ()' supaya smt yang diambil hanya menggunakan smt yang sudah dilakukan pada query internal
      $query2 = "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, max(khs.smt) as smt, khs.status, khs.ip_kumulatif as ipk FROM mahasiswa,khs where mahasiswa.nim=khs.nim AND smt in (SELECT max(smt) FROM khs group by smt) GROUP by nim  order by smt desc";
      #SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, max(khs.smt) as smt, khs.status FROM mahasiswa,khs where mahasiswa.nim=khs.nim  GROUP by nim  order by smt desc 

      // Search GIMANA YA CARA MASUKINNYA ANJIR
      if(isset($_GET["search"])){
        // Pak dika
        

        function cari($keyword){
          $query = 
          $query3 = "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs 
            WHERE
          mahasiswa.nim LIKE '%$keyword%' OR
          mahasiswa.nama LIKE '%$keyword%' OR
          mahasiswa.email LIKE '%$keyword%'
          ";
          return query($query);
        }
        
        $query2 = cari($_GET["keyword"]);
        // End pak dika
        
      }
      // // End Search

      //default
      $defaultR = $db->query($query2);
      if (!$defaultR) {
        die("Could not the query the database: <br />" .$db->error ."<br>Query: " .$query);
      }
      echo '
      <table class="table table-hover text-center table-bordered mt-4">
      <thead>
        <tr>
          <th scope="col">NIM</th>
          <th scope="col">Nama Mahasiswa</th>
          <th scope="col">Email</th>
          <th scope="col">Semester</th>
          <th scope="col">Status</th>
          <th scope="col">IP Kumulatif</th>
          <th scope="col">Action</th>
        </tr>
      </thead>';
      // fetch and display the results

          $result = $defaultR;
    


      $i = 1;
      while ($row = $result->fetch_object()) {
          // fetch_object-> mengembalikan baris saat ini dari kumpulan hasil sebagai objek atau keluarasnfungsi mengembalikan baris saat ini
          echo "<tr>";
          echo "<td>" . $row->nim . "</td>";
          echo "<td>" . $row->nama . "</td>";
          echo "<td>" . $row->email . "</td>";
          echo "<td>" . $row->smt . "</td>";
          echo "<td>" . $row->status . "</td>";
          echo "<td>" . $row->ipk . "</td>";
          echo '<td><a class="btn btn-warning btn-sm" href="edit_srs9.php?id=' .$row->nim .'">Edit</a>&nbsp;&nbsp;
                  </td>';
          echo "</tr>";
          $i++;
      }


      echo "</table>";
      echo "<br />";
      $result->free();
      $db->close();
      ?>
   
    <!-- Selesai Cari -->

    <div class="container">
        <div class="row">
            <div class="col-2 mt-5">
            <select name="status" id="status" onchange="showMhs(this.value)" class="form-select" aria-label="Default select example">
                <option value="3">Tampilkan Semua</option>
                <option value="1">1</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
              </select>
            </div>
          </div>
          <div class="row text-center">
            <div class="col">
              <div id="detail_mhs">          
                <script>
                  window.onload = function(){
                    showMhs(3);
                  }
                </script>
              </div>
            </div>
          </div>
    </div>

      <br>
    <?php 
    include("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="ajaxsrs9.js"></script>
    <div class="bg-white">
      <br>
      <br>
    </div>
    <?PHP
    include('Footer.php');
    ?>
  </body>
</html>