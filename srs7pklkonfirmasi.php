<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/db_login.php');
    ?>$action = $_GET['action'];
$nim = $_GET['id'];

if($action=="terima"){
  $query = $db->query("INSERT into pkl select * from pkltemp where nim=$nim");
  $query2 = $db->query("DELETE from pkltemp where nim=$nim");
  if($query){
    header("location:srs7pkl.php?pesan=sukses");
  }
  else{
    header("location:srs7pkl.php?pesan=gagal");
  }
}
else{
  $query2 = $db->query("DELETE from pkltemp where nim=$nim");
  if($query){
    header("location:srs7pkl.php?pesan=suksestolak");
  }
  else{
    header("location:srs7pkl.php?pesan=gagaltolak");
  }
}
?>