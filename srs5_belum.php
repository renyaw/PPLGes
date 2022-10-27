<?php 
session_start();
require_once('db_login.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PKL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://unpkg.com/htmlincludejs"></script>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <include src="navbar.php"></include>
    <div class="container">
      <br>
      <h3>Progress PKL</h3>
      <hr>
      <div class="alert alert-warning" role="alert">Anda belum mengambil/memasukkan data PKL!</div>
      <br />
      <div class="p-3 mb-2 bg-light text-dark">
      <form method="POST" name="form" autocomplete="on" action="srs5_ong.php">
        <div class="mb-3 form-group">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama"/>
        </div>
        <div class="mb-3 form-group">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" class="form-control" id="nim" name="nim"/>
        </div>
        <div class="mb-3 form-group">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="text" class="form-control" id="tanggal" placeholder="dd/mm/yyyy" name="tanggal"/>
        </div>
        <div class="mb-3 form-group">
          <label for="doswal" class="form-label">Dosen Wali</label>
          <select class="form-select" id="dosen" name="dosen">
            <option>-- Pilih Dosen Wali --</option>
              <?php
                $result = $db->query('select * from dosen');
                while ($data = $result->fetch_object()):
              ?>
                <option value="<?php echo $data->id ?>"><?php echo $data->nama ?></option>
              <?php 
                endwhile 
              ?>
          </select>
        </div>
        <br />
        
        <?php
          if (isset($_POST["submit"])) {
            $nama = test_input($_POST['nama']);
            $nim = test_input($_POST['nim']);
            $tanggal = test_input($_POST['tanggal']);
            $dosen = test_input($_POST['dosen']);

            $result = $db->query(
              "insert into pkl(nim, stat, tanggal_mulai, nilai, status_konfirmasi, upload_pkl) values('$nim','belum lulus', '$tanggal', NULL, '0', NULL)"
             );
            if (!$result) {
              die(
                  "Could not the query the database: <br />" .
                      $db->error .
                      "<br>Query:" .
                      $query
              );
          } else {
              $db->close();
              header("Location: srs5_ong.php");
             
          }
      }
          
        ?>
        <div class="d-grid d-md-flex justify-content-md-end">
          <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      </div>
      <br />
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
