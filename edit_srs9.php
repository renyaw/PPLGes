<?php
require_once "db_login.php";
//mengambil file yang dikirim
$id = $_GET["id"];

//mengambil data query yang dipilih
$getdata = $db->query(
  "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs WHERE nim='$id'"
);

$data = mysqli_fetch_assoc($getdata);
//mengisi data pada variabel
$nim= $data['nim'];
$nama = $data["nama"];
$email = $data["email"];
$status = $data["status"];


//mengecek belum apa susah menonton submit
if (!isset($_POST["submit"])) {
    $query = "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs WHERE nim='$id'" . $id;
    //execute the query
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


    //update data into database
    if ($valid) {
        //asign a query
        $query = "UPDATE pesanan SET status='" .$status ."'WHERE id_pesanan=" .$id;
        if($status=='2'){
          $query2= $db->query("UPDATE ruang SET status = '0' WHERE no_ruang='$no_ruang'");
        }
        else{
          $query3= $db->query("UPDATE ruang SET status = '1' WHERE no_ruang='$no_ruang'");
        }
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
            //ketika sudah di submit , maka akan langsung pindah ke halaman view_customer.php
            $db->close();
            header("Location: dashboard_admin.php");
        }
    }
}
?>

<div class="container pt-5">
        <div class="card">
            <div class="card-header">Edit Data Mahasiswa</div>
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                <div class="form-group">
                    <h5><label class="fw-1" for="id_pesanan">ID Pesanan:</label></h5>
                    <p><?php echo $id_pesanan; ?></p>
                </div>
                <div class="form-group">
                    <h5><label class="fw-1" for="name">Nama Pemesan:</label></h5>
                    <p><?php echo $nama; ?></p>
                </div>
                <div class="form-group">
                    <h5><label class="fw-1" for="name">Email:</label></h5>
                    <p><?php echo $email; ?></p>
                </div>
                </div>
                <div class="col-6">
                <div class="form-group">
                    <h5><label class="fw-1" for="tipe">Room Type:</label></h5>
                    <p><?php echo $tipe; ?></p>
                </div>
                <div class="form-group">
                    <h5><label class="fw-1" for="noruang">Nomor Ruangan:</label></h5>
                    <p><?php echo $no_ruang; ?></p>
                </div>
                <div class="form-group">
                    <h5><label class="fw-1" for="name">Status Pesanan:</label></h5>
                    <?php if ($status == 0) {
                        echo "<p>" . "Pesanan Anda Belum dikonfirmasi" . "</p>";
                    } elseif ($status == 1) {
                        echo "<p>" . "Pesanan Anda Sudah dikonfirmasi" . "</p>";
                    } elseif ($status == 2) {
                        echo "<p>" . "Pesanan Anda Dibatalkan" . "</p>";
                    } ?>
                </div>
                </div>
              </div>
                <form method="POST" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ."?id=" .$id; ?>">
                  <div class="form-group">
                      <h5><label class="fw-1" for="status">Ubah Status:</label></h5>
                      <select name="status" id="status" class="form-control" required>
                          <option value="none" <?php if (isset($status)) {
                              echo 'selected="true"';
                          } ?>>--Select a status--</option>

                          <option value="0" <?php if (
                              isset($status) &&
                              $status == "0"
                          ) {
                              echo 'selected="true"';
                          } ?>>Belum Dikonfirmasi</option>

                          <option value="1" <?php if (
                              isset($status) &&
                              $status == "1"
                          ) {
                              echo 'selected="true"';
                          } ?>>Sudah Dikonfirmasi</option>

                          <option value="2" <?php if (
                              isset($status) &&
                              $status == "2"
                          ) {
                              echo 'selected="true"';
                          } ?>>Ditolak</option>
                      </select>
                      <div class="text-danger"><?php if (isset($error_status)) {
                          echo $error_status;
                      } ?></div>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary" name="submit" value="submit" >Submit</button>
                  <a href="dashboard_admin.php" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
  <?php $db->close(); ?>
</html>
