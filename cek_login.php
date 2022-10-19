<?php

//aktif session
session_start();

require_once('db_login.php');

$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data user
$login = $db->query("select * from user where username='$username' and password='$password'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
//cek apakah username dan password ditemukan pada database
if($cek>0){

    //memasukkan data dari login ke $data dalam bentuk array
    $data=mysqli_fetch_assoc($login);

    //cek jika user login sebagai admin
    if($data['username']=="admin"){

        //buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['email']= $data['email'];
        //alihkan ke halaman dashboard admin
        header("location:dashboard_admin.php");
    }
    else if($data['username']!="admin"){

        //buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['email']= $data['email'];
        //alihkan ke home customer
        header("location:bookroom.php");
    }
    else{
		// alihkan ke halaman login kembali
        header("location:test.php");
		//header("location:login.php?pesan=gagal");
    }
}
else{
    header("location:login.php?pesan=gagal");
}

$status = $db->query("SELECT status from user where username='$username'");
$cok = mysqli_num_rows($status);
// cek level akses melalui status 
if($cok>0){
    $dati=mysqli_fetch_assoc($status);

    if($dati['status']=="1"){
        $_SESSION['username'] = $username;
        $_SESSION['nim'] = $nim;
        header("location:");
    }
    else if($dati['status']=="2"){

    }
}
?>