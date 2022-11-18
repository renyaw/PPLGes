<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Departemen</title>
    <script src="https://unpkg.com/htmlincludejs"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  </head>
  <body class="bg-light">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <include src="navdep.html"></include>
    <?php
    session_start();
    require_once('db_login.php');
    $query = $db->query('SELECT count(*) as jmldsn from dosen');
    $jmldsn=mysqli_fetch_assoc($query);

    $query2 = $db->query('SELECT count(*) as jmlmhs from mahasiswa');
    $jmlmhs=mysqli_fetch_assoc($query2);

    $query3= $db->query("SELECT count(*) as jmlaktif from khs inner JOIN (select nim, max(smt) smt from khs group by nim) b on khs.nim = b.nim and khs.smt=b.smt and khs.status = 'aktif';");
    $jmlaktif=mysqli_fetch_assoc($query3);

    $query4= $db->query("SELECT count(*) as jmltdka from khs inner JOIN (select nim, max(smt) smt from khs group by nim) b on khs.nim = b.nim and khs.smt=b.smt and khs.status != 'aktif';");
    $jmltdka=mysqli_fetch_assoc($query4);



    ?>
    <div class="container p-4 bg-white">
      <h3>Dashboard Departemen</h3>
      <hr />

      <div class="card p-3 mb-2 mt-5 bg-light">
        <div class="card-header fw-bold fs-3">Status</div>
        <div class="row mt-4">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Dosen</h5>
                <p class="card-text"><?php echo $jmldsn['jmldsn']?></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Mahasiswa</h5>
                <p class="card-text"><?php echo $jmlmhs['jmlmhs']?></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mt-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Mahasiswa Aktif</h5>
                <p class="card-text"><?php echo $jmlaktif['jmlaktif']?></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mt-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Mahasiswa Non Aktif</h5>
                <p class="card-text"><?php echo $jmltdka['jmltdka']?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4 ml-4">
          <button class="btn btn-primary" onclick="location.href='srs17.php'" type="button">Data Mahasiswa</button>

          <a href="srs13.php">
            <button class="btn btn-primary" type="button">Rekap Mahasiswa PKL</button>
          </a>

          <a href="srs15.php">
            <button class="btn btn-primary" type="button">Rekap Mahasiswa Skripsi</button>
          </a>
        </div>
      </div>
    </div>

    <?PHP
    include('Footer.php');
    ?>
  </body>
</php>
