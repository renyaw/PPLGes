<?php
require_once('db_login.php');
$id=$_GET['id'];

$defaultR=$db->query("SELECT * from mahasiswa left join skripsi on mahasiswa.nim=skripsi.nim where skripsi.nim is null;");
$sumR=$db->query("SELECT * from mahasiswa left join skripsi on mahasiswa.nim=skripsi.nim where skripsi.nim is null and angkatan = '$id';");
if ($id == "x") {
  $result = $defaultR;
} else {
  $result = $sumR;
}

$jml = mysqli_num_rows($result);
echo $jml;

?>