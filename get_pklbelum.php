<?php
require_once('db_login.php');
$id=$_GET['id'];

$defaultR=$db->query("SELECT * from mahasiswa left join pkl on mahasiswa.nim=pkl.nim where pkl.nim is null;");
$sumR=$db->query("SELECT * from mahasiswa left join pkl on mahasiswa.nim=pkl.nim where pkl.nim is null and angkatan = '$id';");
if ($id == "x") {
  $result = $defaultR;
} else {
  $result = $sumR;
}

// $query =$db->query("SELECT * from mahasiswa left join pkl on mahasiswa.nim=pkl.nim where pkl.nim is null and angkatan = '$id';");
// $query = $db->query("SELECT COUNT(khs.nim) FROM khs, mahasiswa WHERE khs.status = '1' AND khs.nim = mahasiswa.nim AND mahasiswa.angkatan = '$id'");
$jml = mysqli_num_rows($result);
echo $jml;

?>