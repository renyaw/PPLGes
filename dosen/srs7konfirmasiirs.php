<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/db_login.php');
    ?>
$nim = $_GET['id'];

$query = $db->query("INSERT into irs select * from irstemp where nim=$nim");
$query2 = $db->query("DELETE from irstemp where nim=$nim");
if($query){
  header("location:srs7.php?pesan=sukses");
}
else{
  header("location:srs7.php?pesan=gagal");
}
?>