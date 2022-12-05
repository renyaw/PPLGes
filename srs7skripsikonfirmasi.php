<?php
require_once('db_login.php');

$action = $_GET['action'];
$nim = $_GET['id'];
$query3= $db ->query("SELECT * from skripsi where nim=$nim");
$jmldata = mysqli_num_rows($query3);
if($action=="terima"){
  $query = $db->query("INSERT into skripsi select * from skripsitemp where nim=$nim");
  $query2 = $db->query("DELETE from skripsitemp where nim=$nim");
  if($jmldata!=0){
    $query4 = $db->query("DELETE from skripsi where nim=$nim");
    if($query){
      header("location:srs7skripsi.php?pesan=sukses");
    }
    else{
      header("location:srs7skripsi.php?pesan=gagal");
    }
  }
  else{
    if($query){
      header("location:srs7skripsi.php?pesan=sukses");
    }
    else{
      header("location:srs7skripsi.php?pesan=gagal");
    }
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