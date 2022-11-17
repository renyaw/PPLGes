<?php
    require_once($_SERVER["DOCUMENT_ROOT"].'/db_login.php');
    ?>$id=$_GET['id'];
$query = $db->query("SELECT mahasiswa.nama, mahasiswa.nim, pkl.tanggal_mulai, pkl.nilai from pkl inner join mahasiswa where mahasiswa.nim=pkl.nim  and stat = 'Lulus' and mahasiswa.angkatan='$id';");
$query2= $db->query("SELECT mahasiswa.nama, mahasiswa.nim, pkl.tanggal_mulai, pkl.nilai from pkl inner join mahasiswa where mahasiswa.nim=pkl.nim  and stat = 'Lulus' ;");

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
    echo '<td>'.$row->nilai.'</td>';
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
