<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kartu Hasil Studi</title>
    <link rel="stylesheet" href="srs4.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://unpkg.com/htmlincludejs"></script>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" />
    <style>
        body {
            font-family: "Inter";
            font-size: 22px;
        }
    </style>
</head>

<body class="bg-light">
    <?php
    session_start();
    require_once('db_login.php');
    ?>
    <include src="navbar.php"></include>
    <div class="container py-4 px-5 bg-white">
        <?php
        if (isset($_GET['pesan'])) {
            //salah akun/password
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert alert-danger text-center'>Data gagal disimpan</div>";
            } else {
                echo "<div class='alert alert-success text-center'>Data berhasil disimpan</div>";
            }
        }
        ?>
        <h3 class="fw-bold">Kartu Hasil Studi (KHS)</h3>
        <div name="garishr" class="row border border-dark my-3 mx-1"></div>
        <?php
        $noinduk = $_SESSION['noinduk'];
        $query = $db->query("SELECT khs.smt, khs.ip_semester, khs.sks_kumulatif from khs where nim = '$noinduk' order by smt");
        $query2 = $db->query("SELECT angkatan from mahasiswa where nim ='$noinduk'");
        $data = mysqli_fetch_assoc($query2);
        while ($row = $query->fetch_object()) {
            echo "<div class='card my-3' style='background-color:#BFF2E9'>";
            echo '<div class="d-grid py-2" >';
            echo '<button class="btn text-start"  style="background-color:#BFF2E9" type="button">Semester ' . $row->smt;
            echo '<div name="garishr" class="row border border-dark my-3 mx-1"></div>';
            echo "IP Semester : " . $row->ip_semester;
            echo "<br>Jumlah SKS : " . $row->sks_kumulatif;
            echo '</button>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
    <div class="container bg-white px-5 pb-5">
        <div class="row ">
            <div class="col-10 ">
            </div>
            <div class="col-2  ps-5">
                <button type="button" class="btn btn-primary" onclick="location.href='srs4upkhs.php'">Upload KHS</button>
                <button type="button" class="btn btn-warning" onclick="location.href='srs10.php'">Kembali</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <?PHP
    include('Footer.php');
    ?>
</body>

</html>