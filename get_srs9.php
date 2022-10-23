<?php
// include our login information
//session_start(); //menginisialilasi session lalu akan diteruskan ke get dan post
require_once "db_login.php"; // memanggil halaman
$id=$_GET['id'];

$query = "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs WHERE status='$id'";
//default
$query2 =
    "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs";

// Search GIMANA YA CARA MASUKINNYA ANJIR
if(isset($_GET["search"])){
  // Pak dika
  $query2 = cari($_GET["keyword"]);

  function cari($keyword){
    $query = 
    $query3 = "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs 
      WHERE
    mahasiswa.nim LIKE '%$keyword%' OR
    mahasiswa.nama LIKE '%$keyword%' OR
    mahasiswa.email LIKE '%$keyword%'
    ";
    return query($query);
  }
  // End pak dika
  
}
// End Search

//sort
$sortR = $db->query($query);
if (!$sortR) {
  die("Could not the query the database: <br />" .$db->error ."<br>Query: " .$query);
}
//default
$defaultR = $db->query($query2);
if (!$defaultR) {
  die("Could not the query the database: <br />" .$db->error ."<br>Query: " .$query);
}
echo '
<table class="table table-hover text-center table-bordered mt-4">
<thead>
  <tr>
    <th scope="col">NIM</th>
    <th scope="col">Nama Mahasiswa</th>
    <th scope="col">Email</th>
    <th scope="col">Semester</th>
    <th scope="col">Status</th>
    <th scope="col">Action</th>
  </tr>
</thead>';
// fetch and display the results

if ($id == "3") {
    $result = $defaultR;
} else{
    $result = $sortR;
}


$i = 1;
while ($row = $result->fetch_object()) {
    // fetch_object-> mengembalikan baris saat ini dari kumpulan hasil sebagai objek atau keluarasnfungsi mengembalikan baris saat ini
    echo "<tr>";
    echo "<td>" . $row->nim . "</td>";
    echo "<td>" . $row->nama . "</td>";
    echo "<td>" . $row->email . "</td>";
    echo "<td>" . $row->smt . "</td>";
    echo "<td>" . $row->status . "</td>";
    echo '<td><a class="btn btn-warning btn-sm" href="edit_srs9.php?id=' .$row->nim .'">Edit</a>&nbsp;&nbsp;
            </td>';
    echo "</tr>";
    $i++;
}


echo "</table>";
echo "<br />";
$result->free();
$db->close();
?>
