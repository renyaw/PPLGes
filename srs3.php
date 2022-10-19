<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
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
  <body>
    <?php
    session_start();
    require_once('db_login.php');
    ?>
    <include src="navbar.html"></include>
    <div class="container mt-4">
      <h2 class="fw-bold">Entry IRS</h2>
      <hr />
      <div class="card bg-light px-5 pb-5 pt-4 mt-5">
        <h2 class="fw-bold">Profile</h2>
        <hr />
        <div class="row justify-content-between">
          <div class="col-3">
            <div class="card bg-transparent border-0 mx-auto">
              <img src="img/bebekbulet.png" class="img-fluid" />
            </div>
            <div class="card text-center mt-3 mx-auto bg-success text-white" style="width: 14vh; max-width: 100px">
              Aktif
            </div>
          </div>
          <div class="col-8">
            <div class="row mt-4">
              <div class="col-6">
                <h3 class="fw-bold">Nama</h3>
                <?php
                $noinduk = $_SESSION['noinduk'];
                $query = $db->query("SELECT nama FROM mahasiswa where nim ='$noinduk'");
                $data = mysqli_fetch_assoc($query);
                echo "<p>".$data['nama']."</p>"
                ?>
              </div>
              <div class="col-6">
                <h3 class="fw-bold">NIM</h3>
                <?php
                $noinduk = $_SESSION['noinduk'];
                $query = $db->query("SELECT nim FROM mahasiswa where nim ='$noinduk'");
                $data = mysqli_fetch_assoc($query);
                echo "<p>".$data['nim']."</p>"
                ?>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-6">
                <h3 class="fw-bold">Angkatan</h3>
                <?php
                $noinduk = $_SESSION['noinduk'];
                $query = $db->query("SELECT angkatan FROM mahasiswa where nim ='$noinduk'");
                $data = mysqli_fetch_assoc($query);
                echo "<p>".$data['angkatan']."</p>"
                ?>
              </div>
              <div class="col-6">
                <h3 class="fw-bold">Dosen Wali</h3>
                <?php
                $noinduk = $_SESSION['noinduk'];
                $query = $db->query("SELECT dosen.nama FROM dosen inner join mahasiswa where nim ='$noinduk' and mahasiswa.kode_wali=dosen.kode_wali");
                $data = mysqli_fetch_assoc($query);
                echo "<p>".$data['nama']."</p>"
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form action="">
        <div class="card mt-5 p-5 bg-light">
          <div class="row">
            <h3 class="fw-bold">Semester</h3>
          </div>
          <div class="row mx-2">
            <input type="text" class="border rounded-2" style="background-color: rgb(178, 178, 178)" placeholder="Masukan Semester..." />
          </div>
          <div class="row">
            <h3 class="fw-bold mt-5">Upload Scan IRS</h3>
          </div>

          <div class="row">
            <input type="file" class="ms-2" />
          </div>
          <div class="row align-self-end">
            <div class="col-2 me-1">
              <button type="submit" class="rounded btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
