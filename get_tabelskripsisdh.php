<?php
require_once('db_login.php');
$id=$_GET['id'];

$query = $db->query("SELECT mahasiswa.nama, mahasiswa.nim, skripsi.tgl_sidang from skripsi inner join mahasiswa where mahasiswa.nim=skripsi.nim  and status = 'Lulus' and mahasiswa.angkatan='$id';");
$query2= $db->query("SELECT mahasiswa.nama, mahasiswa.nim, skripsi.tgl_sidang from skripsi inner join mahasiswa where mahasiswa.nim=skripsi.nim  and status = 'Lulus' ;");

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
    echo '<td>'.$row->tgl_lulus.'</td>';
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
