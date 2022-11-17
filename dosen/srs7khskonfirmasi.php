<?php
require_once('db_login.php');
$action = $_GET['action'];
$nim = $_GET['id'];

if($action=="terima"){
  $query = $db->query("INSERT into khs select * from khstemp where nim=$nim");
  $query2 = $db->query("DELETE from khstemp where nim=$nim");
  if($query){
    header("location:srs7khs.php?pesan=sukses");
  }
  else{
    header("location:srs7khs.php?pesan=gagal");
  }
}
else{
  $query2 = $db->query("DELETE from irstemp where nim=$nim");
  if($query){
    header("location:srs7khs.php?pesan=suksestolak");
  }
  else{
    header("location:srs7khs.php?pesan=gagaltolak");
  }
}
?>