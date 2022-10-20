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
    <br />
    <div class="container">
      <h3>Progress PKL</h3>
      <hr>
      <div class="alert alert-success" role="alert">Anda sedang melakukan PKL. Silahkan update progress PKL secara berkala.</div>
      <br />
      <div class="p-3 mb-2 bg-light text-dark">
        <div class="mb-3">
          <label for="progress" class="form-label">Progress ke-</label>
          <input type="text" class="form-control" id="progress" />
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Scan Berita Acara</label>
          <input class="form-control" type="file" id="formFile" />
        </div>
        <br />
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="srs5_belum.html"><button class="btn btn-primary" type="button">Edit Data</button></a>
          <button class="btn btn-primary" type="button">Submit</button>
        </div>
      </div>
      <br />
    </div>
  </body>
</html>