<?php
require_once "db_login.php";
session_start();
//get data from url
$id = $_GET["id"];

//mengambil data query yang dipilih
$getdata = $db->query(
  "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs WHERE mahasiswa.nim = $id "
);

$data = mysqli_fetch_assoc($getdata);
//mengisi data pada variabel
$nim= $data['nim'];
$nama = $data["nama"];
$email = $data["email"];
$smt = $data["smt"];
$status = $data["status"];



//cek are user click on submit
if (!isset($_POST["submit"])) {
    //execute the query
    $query = "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs WHERE mahasiswa.nim = $id ";
    $result = $db->query($query);
    if (!$result) {
        die("Could not the query database: <br />" . $db->error);
    } else {
        while ($row = $result->fetch_object()) {
            $name = $row->status;
        }
    }
} else {
    $valid = true; //flag validasi
    $status = test_input($_POST["status"]);
    if ($status == "") {
        $error_status = "Name is required";
        $valid = false;
    }

    //Update data ke database
    if($valid){
        $nim = $_SESSION['noinduk'];
        $query = "UPDATE mahasiswa, khs SET nim='$nim', nama='$nama', email='$email', smt='$smt', status='$status' 
        WHERE mahasiswa.nim=$nim";
        
           //execute the query
        $result = $db->query($query);
        if (!$result) {
            die(
                "Could not the query the database: <br />" .
                    $db->error .
                    "<br>Query:" .
                    $query
            );
        } else {
            
            $db->close();
            header("Location: srs9.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Operator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://unpkg.com/htmlincludejs"></script>
  </head>
  <body>
    <div class="container col-8">
        <div class="card mt-5 card ">
            <h5 class="card-header text-bg-success">Edit Data Mahasiswa</h1>
            <div class="card-body">
              <form action="" method="post">
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM Mahasiswa</label>
                    <input type="" class="form-control border-success" id="nim" value="<?= $nim; ?>">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="name" class="form-control border-success" id="nama" value="<?= $nama; ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Mahasiswa</label>
                    <input type="email" class="form-control border-success" id="email" value="<?= $email; ?>">
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="smt" class="form-label">Semester</label>
                        <input type="number" class="form-control border-success" id="smt" value="<?= $smt; ?>">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select border-success">
                            <option value="0"></option>
                            <option value="1"></option>
                            <option value="2"></option>
                        </select>
                        
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-success mt-3" name="submit" value="submit">Submit</button>
              </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="ajaxsrs9.js"></script>
  </body>
</html>