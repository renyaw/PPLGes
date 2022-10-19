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

  <body>
    <?php
    session_start();
    require_once('db_login.php');
    ?>
    <include src="navbar.html"></include>
    <div class="container mt-4">
      <h2 class="fw-bold">Dashboard Mahasiswa</h2>
      <hr />

      <div class="row mt-5">
        <div class="col-md-6">
          <div class="col-md border bg-light pt-4">
            <div class="row">
              <div class="col-md-4 p-3 ps-4">
                <img src="img/bebekbulet.png" style="width: 100%" />
              </div>
              <div class="col-md-8">
                <?php
                  $noinduk = $_SESSION['noinduk'];
                  $query = $db->query("SELECT * FROM mahasiswa where nim ='$noinduk'");

                  $data=mysqli_fetch_assoc($query);

                  echo "<p>". $data['nama']."</p>";
                  echo "<p>". $data['nim'] ."</p>";
                  echo "<p>S1 Informatika</p>";
                  echo "<p>Fakultas Sains dan Matematika</p>";
                ?>
                <p class="fw-bold" style="color: #52ff63">Aktif</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 border bg-light">
          <div class="row justify-content-evenly mt-2">
            <div class="col-md-5">
              <div class="card border shadow-sm">
                <div class="card-body text-center" style="background: linear-gradient(180deg, #ffee54 0%, #ffffff 55%)">
                  <p class="fw-bold">IPK</p>
                  3.67
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card border-1 shadow-sm">
                <div class="card-body text-center" style="background: linear-gradient(180deg, #52ff63 0%, #ffffff 55%)">
                  <p class="fw-bold">Semester</p>
                  7
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-evenly mt-4 mb-2">
            <div class="col-md-5">
              <div class="card border-1 shadow-sm">
                <div class="card-body text-center" style="background: linear-gradient(180deg, #6473ff 0%, #ffffff 55%)">
                  <p class="fw-bold">SKSk</p>
                  96
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card border-1 shadow-sm">
                <div class="card-body text-center" style="background: linear-gradient(180deg, #ff5a5a 0%, #ffffff 55%)">
                  <p class="fw-bold">Dosen Wali</p>
                  Rohmat <wbr />Adiguno
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-md-6">
          <div class="row">
            <div class="col-9 ms-3">
              <div class="row border bg-light">
                <div class="col-3">
                  <div class="card border-0 bg-transparent pt-1">
                    <img src="img/Accircle.png" style="max-width: max-content; max-height: max-content" />
                  </div>
                </div>
                <div class="col-9">
                  <p class="fs-1 fw-bold mt-2">Profile</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 border pb-2 bg-light">
          <div class="row justify-content-evenly">
            <div class="col-md-4">
              <a href="srs4.html">
                <div class="card border-0 shadow-sm mt-2">
                  <div class="card-body text-center rounded-1" style="background: #ffee54">
                    <button class="fw-bold border-0 bg-transparent">KHS</button>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="srs6_belum.html">
                <div class="card border-0 shadow-sm mt-2">
                  <div class="card-body text-center rounded-1" style="background: #52ff63">
                    <button class="fw-bold border-0 bg-transparent">Skripsi</button>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="row justify-content-evenly">
            <div class="col-md-4">
              <a href="srs3.html">
                <div class="card border-0 shadow-sm mt-2">
                  <div class="card-body text-center rounded-1" style="background: #6473ff">
                    <button class="fw-bold border-0 bg-transparent">IRS</button>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="srs5_belum.html">
                <div class="card border-0 shadow-sm mt-2">
                  <div class="card-body text-center rounded-1" style="background: #ff5a5a">
                    <button class="fw-bold border-0 bg-transparent">PKL</button>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
