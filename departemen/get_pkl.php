<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/db_login.php');
    ?>$id=$_GET['id'];

$defaultR=$db->query("SELECT * from mahasiswa inner join pkl where mahasiswa.nim=pkl.nim;");
$sumR=$db->query("SELECT * from mahasiswa inner join pkl where mahasiswa.nim=pkl.nim and angkatan = '$id';");
if ($id == "x") {
  $result = $defaultR;
} else {
  $result = $sumR;
}

// $query =$db->query("SELECT * from mahasiswa inner join pkl where mahasiswa.nim=pkl.nim and angkatan = '$id';");
// $query = $db->query("SELECT COUNT(khs.nim) FROM khs, mahasiswa WHERE khs.status = '1' AND khs.nim = mahasiswa.nim AND mahasiswa.angkatan = '$id'");
$jml = mysqli_num_rows($result);
echo $jml;

?>
