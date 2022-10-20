<?php
require_once('db_login.php');
$id=$_GET['id'];

$defaultR=$db->query("SELECT * from mahasiswa inner join skripsi where mahasiswa.nim=skripsi.nim;");
$sumR=$db->query("SELECT * from mahasiswa inner join skripsi where mahasiswa.nim=skripsi.nim and angkatan = '$id';");
if ($id == "x") {
  $result = $defaultR;
} else {
  $result = $sumR;
}

$jml = mysqli_num_rows($result);
echo $jml;

?>
