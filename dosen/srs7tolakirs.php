<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/db_login.php');
    ?>
$nim = $_GET['id'];

$query2 = $db->query("DELETE from irstemp where nim=$nim");
if($query){
  header("location:srs7.php?pesan=suksestolak");
}
else{
  header("location:srs7.php?pesan=gagaltolak");
}
?>