<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-night.min.css" rel="stylesheet"> -->

    <style>
      body {
        width: auto;
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-image: url("img/undiplnscp.png");
      }
    </style>
  </head>
  <body>
    <?php
      if(isset($_GET['pesan'])){
        //salah akun/password
        if($_GET['pesan']=="gagal"){
          echo "<div class='alert alert-danger text-center'>Kredensial masukmu tak cocok dengan akun<br> dalam sistem kami!</div>";
        }
      }
    ?>
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="col-6 mx-auto">
          <div class="card p-4 rounded-0 shadow-lg">
            <div class="container text-center mt-3">
              <img src="img/logo.png" alt="Logo" width="100" height="115" class="d-inline-block" />
              <br />
              <br />
              <h3><b>Informatika</b></h3>
            </div>
            <br />
            <div class="container">
              <div class="form-control bg-light rounded-0">
                <br />
                <form name="form" method="POST" autocomplete="off" action="cek_login.php">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" />
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"/>
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Login" />
                  </div>
                </form>
                <br />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
