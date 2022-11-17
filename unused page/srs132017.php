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
    <include src="navdep.html"></include>
    <?php
    session_start();
        require_once($_SERVER["DOCUMENT_ROOT"].'/db_login.php');
    ?>    ?>
    <div class="container">
      <h3 class="mt-3">Rekap Data PKL</h3>
      <hr />
      <div class="d-grid gap-2 mt-5 d-md-block">
        <a href="srs132017.php">
          <button class="btn btn-secondary" type="button">2017</button>
        </a>
        <a href="srs132018.php">
          <button class="btn btn-outline-secondary" type="button" disabled>2018</button>
        </a>
        <a href="srs132019.php">
          <button class="btn btn-outline-secondary" type="button" disabled>2019</button>
        </a>
        <a href="srs132020.php">
          <button class="btn btn-outline-secondary" type="button" disabled>2020</button>
        </a>
        <a href="srs132021.php">
          <button class="btn btn-outline-secondary" type="button" disabled>2021</button>
        </a>
      </div>
      <div class="card mt-5 bg-light">
        <div class="row">
          <div class="col-md-4 mx-auto mt-5">
            <div class="card" style="background-color: #92ff80; height: 200px">
              <div class="card-body text-center">
                <br />
                <h3>
                <?php
                  $query = $db->query("SELECT COUNT(khs.nim) FROM khs, mahasiswa WHERE khs.status = '1' AND khs.nim = mahasiswa.nim AND mahasiswa.angkatan = '2017'");
                  $data = mysqli_fetch_assoc($query);
                  echo $data['COUNT(khs.nim)'];
                ?>
                <br /><br />Sudah PKL</h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 mx-auto mt-5">
            <div class="card" style="background-color: #ed8282; height: 200px">
              <div class="card-body text-center my-auto">
                <br />
                <h3>
                <?php
                  $query2 = $db->query("SELECT COUNT(khs.nim) FROM khs, mahasiswa WHERE khs.status = '1' AND khs.nim = mahasiswa.nim AND mahasiswa.angkatan = '2017'");
                  $data2 = mysqli_fetch_assoc($query2);
                  echo $data['COUNT(khs.nim)'];
                ?>
                <br /><br />Belum PKL</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="container mt-5 mb-5">
          <div class="col d-flex justify-content-center">
            <a href="srs14_blm.html"><button type="button" class="btn btn-outline-primary mx-auto">Lihat Detail</button> </a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
