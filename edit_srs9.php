<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Operator</title>
    <link rel="stylesheet" href="srs4.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://unpkg.com/htmlincludejs"></script>
  </head>
  <body>
    <?php 
    session_start();
    require_once('db_login.php');
    ?>
    <div class="container">
        <h3 class="mt-3 mb-3">Edit Data</h3>
    <div class="container">
        <div class="row">
            <div class="col-2 mt-5">
              <select class="form-select" aria-label="Default select example">
                <option selected disabled>Tampilkan 5 Item</option>
                <option value="1">BWA</option>
                <option value="2">BWA</option>
                <option value="3">BWA</option>
              </select>
            </div>
            <div class="col-2 mt-4 ">
                <a for="nama" class="form-label text-black" style="text-decoration:none;">Cari</a>
                <input type="text" placeholder="Cari"class="form-control" id="nama">
            </div>
            </div>
            <a class="d-flex justify-content-end mt-2 text-black" href="edit_srs9.php?id=23">Edit</a>
          <table class="table table-hover text-center table-bordered">
            <thead>
              <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Email</th>
                <th scope="col">Semester</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <?php
              
              $result = $db->query("SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs");
              while($row=$result->fetch_object()){
                echo '<tr>';
                echo "<td>" . $row->nim . "</td>";
                echo "<td>" . $row->nama . "</td>";
                echo "<td>" . $row->email . "</td>";
                echo "<td>" . $row->smt . "</td>";
                echo "<td>" . $row->status . "</td>";
                echo '</tr>';
              }
              ?>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
