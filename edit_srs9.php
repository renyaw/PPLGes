<?php
require_once "db_login.php";
//get data from url
$id = $_GET["id"];

// //mengambil data query yang dipilih
// $getdata = $db->query(
//   "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs WHERE nim='$id'"
// );

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
              <form action="" method="get">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
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