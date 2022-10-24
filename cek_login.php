<?php

session_start();
require_once('db_login.php');
$username = $_POST['username'];
$password = $_POST['password'];


$login = $db->query("SELECT * FROM user WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek>0){

  $data=mysqli_fetch_assoc($login);
  $_SESSION['username'] = $username; 
  $noinduk = $data['nip_nim'];
  $_SESSION['noinduk'] = $noinduk;
 
  if($data['status']==1){
    //operator
    $_SESSION['status']= $data['status'];
    header("location:srs9.php");
  }
  else if($data['status']==2){
    //mahasiswa
    $query1= $db->query("SELECT * FROM mahasiswa WHERE nim ='$noinduk'");

    
    header("location:srs10.php?pesan=sukses");
  }
  else if($data['status']==3){
    //dosen
    $_SESSION['status']= $data['status'];
    header("location:srs11.php");
  }
  else if($data['status']==4){
    //departemen
    $_SESSION['status']= $data['status'];
    header("location:srs12.php");
  }
}
else{
  header("location:login.php?pesan=gagal");
}
?>