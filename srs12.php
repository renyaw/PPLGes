<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PKL</title>
    <script src="https://unpkg.com/htmlincludejs"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  </head>
  <body>
    <include src="navbar.html"></include>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <br />
    <div class="container">
      <h3>Dashboard Departemen</h3>
      <hr />

      <div class="card p-3 mb-2 mt-5 bg-light">
        <div class="card-header fw-bold fs-3">Status</div>
        <div class="row mt-4">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Pegawai</h5>
                <p class="card-text">120</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Mahasiswa</h5>
                <p class="card-text">1500</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mt-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Pegawai Aktif</h5>
                <p class="card-text">110</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mt-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Mahasiswa Aktif</h5>
                <p class="card-text">1300</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mt-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Pegawai Cutif</h5>
                <p class="card-text">10</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mt-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Mahasiswa Non Aktif</h5>
                <p class="card-text">200</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4 ml-4">
          <button class="btn btn-primary" hreftype="button">Data Mahasiswa</button>

          <a href="srs13.php">
            <button class="btn btn-primary" type="button">Rekap Mahasiswa PKL</button>
          </a>

          <a href="srs15.php">
            <button class="btn btn-primary" type="button">Rekap Mahasiswa Skripsi</button>
          </a>
        </div>
      </div>
    </div>
  </body>
</php>
