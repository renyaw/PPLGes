<?php
require_once('db_login.php');
$id=$_GET['id'];

$query = $db->query("SELECT mahasiswa.nama, mahasiswa.nim, pkl.tanggal_mulai from pkl inner join mahasiswa where mahasiswa.nim=pkl.nim  and status = 'Lulus' and mahasiswa.angkatan='$id';");
$query2= $db->query("SELECT mahasiswa.nama, mahasiswa.nim, pkl.tanggal_mulai from pkl inner join mahasiswa where mahasiswa.nim=pkl.nim  and status = 'Lulus' ;");

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
    echo '<td>'.$row->tanggal_mulai.'</td>';
    echo '<td> - </td>';
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
