<?php
require_once('db_login.php');
$id=$_GET['id'];

$query = $db->query("SELECT mahasiswa.nama, mahasiswa.nim, dosen.nama  as namadosen, mahasiswa.angkatan from pkl inner join mahasiswa inner join dosen where mahasiswa.nim=pkl.nim and dosen.kode_wali=mahasiswa.kode_wali and status = 'Belum Lulus' and mahasiswa.angkatan='$id';");
$query2= $db->query("SELECT mahasiswa.nama, mahasiswa.nim, dosen.nama  as namadosen, mahasiswa.angkatan from pkl inner join mahasiswa inner join dosen where mahasiswa.nim=pkl.nim and dosen.kode_wali=mahasiswa.kode_wali and status = 'Belum Lulus' ;");

if($id!='x'){
  $result = $query;
}
else{
  $result = $query2;
}

$jml= mysqli_num_rows($result);

if($jml!=0){
  while ($row = $result->fetch_object()) {
    echo '<tr>';
    echo '<td>'.$row->nama.'</td>';
    echo '<td>'.$row->nim.'</td>';
    echo '<td>'.$row->namadosen.'</td>';
    echo '<td>'.$row->angkatan.'</td>';
    echo '</tr>';  
  }   
}
else{
  echo '<tr>';
  echo '<td> - </td>';
  echo '<td> - </td>';
  echo '<td> - </td>';
  echo '<td> - </td>';
  echo '</tr>';
}
?>
