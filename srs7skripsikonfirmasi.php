<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/db_login.php');
    ?>$action = $_GET['action'];
$nim = $_GET['id'];

if($action=="terima"){
  $query = $db->query("INSERT into skripsi select * from skripsitemp where nim=$nim");
  $query2 = $db->query("DELETE from skripsitemp where nim=$nim");
  if($query){
    header("location:srs7skripsi.php?pesan=sukses");
  }
  else{
    header("location:srs7skripsi.php?pesan=gagal");
  }
}
else{
  $query2 = $db->query("DELETE from skripsitemp where nim=$nim");
  if($query){
    header("location:srs7skripsi.php?pesan=suksestolak");
  }
  else{
    header("location:srs7skripsi.php?pesan=gagaltolak");
  }
}
?>