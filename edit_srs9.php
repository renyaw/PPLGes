<?php
require_once "db_login.php";
//get data from url
$id = $_GET["id"];

//cek are user click on submit
if (!isset($_POST["submit"])) {
    //execute the query
    $query = "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status, khs.ip_semester, khs.ip_kumulatif FROM mahasiswa,khs WHERE mahasiswa.nim=khs.nim  AND mahasiswa.nim=".$id;
    $result = $db->query($query);
    if (!$result) {
        die("Could not the query database: <br />" . $db->error);
    } else {
        while ($row = $result->fetch_object()) {
            $nim = $row->nim;
            $nama = $row->nama;
            $email = $row->email;
            $smt = $row->smt;
            $status = $row->status;
            $ip_kumulatif = $row->ip_kumulatif;
        }
    }
} else {
    $valid = True; //flag validasi
    $nim = test_input($_POST["nim"]);
    $nama = test_input($_POST["nama"]);
    $email = test_input($_POST["email"]);
    $smt = test_input($_POST["smt"]);
    $status = test_input($_POST["status"]);
    $ip_kumulatif = test_input($_POST["ipk"]);
    if ($status == "") {
        $error_status = "Name is required";
        $valid = false;
    }

    //Update data ke database
    if($valid){
        $query .= "UPDATE mahasiswa SET nama='".$nama."', email='".$email."' WHERE nim='".$id."';";
        $query .= "UPDATE khs SET smt='".$smt."', status='".$status."', ip_kumulatif='".$ip_kumulatif."' WHERE nim='".$id."' ";
           //execute the query
        $result = $db->multi_query($query);
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
              <form method="post" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?id=' .$id; ?>">
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM Mahasiswa</label>
                    <input type="text" class="form-control border-success" id="nim" name="nim" value="<?php echo $nim; ?>">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control border-success" id="nama" name="nama" value="<?php echo $nama; ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Mahasiswa</label>
                    <input type="text" class="form-control border-success" id="email" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="smt" class="form-label">Semester</label>
                        <input type="number" class="form-control border-success" id="smt" name="smt" value="<?php echo $smt; ?>">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select border-success" required>
                            <option value="none" <?php if (isset($status)) echo 'selected="true"';?>>--Masukkan Status--</option>
                            <option value="Aktif" <?php if (isset($status) && $status=="Aktif") echo 'selected="true"';?>>Aktif</option>
                            <option value="Cuti" <?php if (isset($status) && $status=="Cuti") echo 'selected="true"';?>>Cuti</option>
                            <option value="Mangkir" <?php if (isset($status) && $status=="Mangkir") echo 'selected="true"';?>>Mangkir</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="ipk" class="form-label">IPK Mahasiswa</label>
                    <input type="text" class="form-control border-success" id="ipk" name="ipk" value="<?php echo $ip_kumulatif; ?>">
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