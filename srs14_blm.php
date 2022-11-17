<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>List PKL</title>
    <script src="https://unpkg.com/htmlincludejs"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  </head>
  <body class="bg-light">
    <?php
    session_start();
    require_once('db_login.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <include src="navdep.html"></include>
    <br />
    <div class="container p-4 bg-white">
      <h3>List PKL</h3>
      <hr />
      <br />
      <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-outline-success" type="submit" onclick="location.href='srs14_udh.php'" >Lulus</button>
          <button class="btn btn-danger" type="button">Belum Lulus</button>
      </div>
      <br />
      <div class="d-grid d-md-block">
      <button class="btn btn-outline-secondary" type="button" onclick="showTabelpklblm('x');">Semua</button>
        <?php
          $query = $db->query("SELECT angkatan FROM mahasiswa where nim in(SELECT max(nim) FROM mahasiswa group by angkatan) order by angkatan");
          while($row=$query->fetch_object()){
            echo "<button class='btn btn-outline-secondary mx-1' id='angkatan' value='$row->angkatan' onclick='showTabelpklblm($row->angkatan)'>".$row->angkatan."</button>";
          }
        ?>
      </div>
      <br />
      <div>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Dosen Wali</th>
            <th scope="col">Angkatan</th>
          </tr>
        </thead>
        <tbody id="tabel_pklblm" class="table-group-divider">
        </tbody>
      </table>
    </div>
      <br />
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
      <button type="button"  class="btn btn-warning mt-4 shadow" onclick="location.href='srs12.php'">Kembali</button>
    </div>
    
    <?php 
				$batas = 10;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
      ?>

    <script src='ajax1.js'></script>
    <script>
      window.onload = function(){
        showTabelpklblm('x');
      }
    </script>

    <?PHP
    include('Footer.php');
    ?>
  </body>
</html>
