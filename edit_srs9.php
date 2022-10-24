<?php
require_once "db_login.php";
//get data from url
$id = $_GET["id"];

//mengambil data query yang dipilih
$getdata = $db->query(
  "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs WHERE mahasiswa.nim = $id "
);

// $data = mysqli_fetch_assoc($getdata);
// //mengisi data pada variabel
// $nim= $data['nim'];
// $nama = $data["nama"];
// $email = $data["email"];
// $status = $data["status"];


// //mengecek belum apa susah menonton submit
// if (!isset($_POST["submit"])) {
//     $query = "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs WHERE nim='$id'" . $id;
//     //execute the query
//     $result = $db->query($query);
//     if (!$result) {
//         die("Could not the query database: <br />" . $db->error);
//     } else {
//         while ($row = $result->fetch_object()) {
//             $name = $row->status;
//         }
//     }
// } else {
//     $valid = true; //flag validasi
//     $status = test_input($_POST["status"]);
//     if ($status == "") {
//         $error_status = "Name is required";
//         $valid = false;
//     }


//     //update data into database
//     if ($valid) {
//         //asign a query
//         $query = "UPDATE pesanan SET status='" .$status ."'WHERE id_pesanan=" .$id;
//         if($status=='2'){
//           $query2= $db->query("UPDATE ruang SET status = '0' WHERE no_ruang='$no_ruang'");
//         }
//         else{
//           $query3= $db->query("UPDATE ruang SET status = '1' WHERE no_ruang='$no_ruang'");
//         }
//         //execute the query
//         $result = $db->query($query);
//         if (!$result) {
//             die(
//                 "Could not the query the database: <br />" .
//                     $db->error .
//                     "<br>Query:" .
//                     $query
//             );
//         } else {
//             //ketika sudah di submit , maka akan langsung pindah ke halaman view_customer.php
//             $db->close();
//             header("Location: dashboard_admin.php");
//         }
//     }
// }
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
    <div class="container">
        <div class="card mt-5">
            <h5 class="card-header">Edit Data Mahasiswa</h1>
            <div class="card-body">
              <form action="" method="post">
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM Mahasiswa</label>
                    <input type="" class="form-control" id="nim">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="name" class="form-control" id="nama">
                </div>
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email Mahasiswa</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="row">
                    <div class="mb-3 col-3">
                        <label for="smt" class="form-label">Semester</label>
                        <input type="number" class="form-control" id="smt">
                    </div>
                    <div class="mb-3 col-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" aria-label="Default select example">
                            <option value="0"></option>
                            <option value="1"></option>
                            <option value="2"></option>
                        </select>
                        
                    </div>
                </div>
                
                <button type="submit" class="btn btn-outline-success">Submit</button>
              </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="ajaxsrs9.js"></script>
  </body>
</html>