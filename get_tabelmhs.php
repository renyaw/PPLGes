<?php
require_once('db_login.php');
$id=$_GET['id'];
$query = $db->query("SELECT mahasiswa.nama, mahasiswa.nim, mahasiswa.angkatan,khs.smt, khs.status as stat, sks_kumulatif as sks , khs.ip_kumulatif as ipk from khs inner join mahasiswa inner JOIN (select nim, max(smt) smt from khs group by nim) b on khs.nim = b.nim and khs.smt=b.smt and mahasiswa.nim=khs.nim and mahasiswa.angkatan='$id';");
$query2= $db->query("SELECT mahasiswa.nama, mahasiswa.nim, mahasiswa.angkatan,khs.smt, khs.status as stat, sks_kumulatif as sks , khs.ip_kumulatif as ipk from khs inner join mahasiswa inner JOIN (select nim, max(smt) smt from khs group by nim) b on khs.nim = b.nim and khs.smt=b.smt and mahasiswa.nim=khs.nim;");

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
    echo '<td>'.$row->nim.'</td>';
    echo '<td>'.$row->nama.'</td>';
    echo '<td>'.$row->stat.'</td>';
    echo '<td>'.$row->angkatan.'</td>';
    echo '<td>'.$row->sks.'</td>';
    echo '<td>'.$row->smt.'</td>';
    echo '<td>'.$row->ipk.'</td>';
    

    // //tombol modal
    // echo '<td>';
    // echo '<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalId'.$row->nim.'">';
    // echo 'Lebih Lengkap';
    // echo '</button>';
    // echo '</td>';
    echo '</tr>'; 

    // echo '<div class="modal fade" id="modalId'.$row->nim.'" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">';
    // echo  '<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">';
    // echo  '<div class="modal-content">';
    // echo    '<div class="modal-header">';
    // echo      '<h5 class="modal-title" id="modalTitleId">'.$row->nama.'</h5>';
    // echo        '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
    // echo    '</div>';
    // echo    '<div class="modal-body">';
    // echo      'NIM:'.$row->nim;
    // echo      'Status:'.$row->stat;
    // echo      'Angkatan:'.$row->angkatan;
    // echo      'IPK:'.$row->ipk;
    // echo    '</div>';
    // echo    '<div class="modal-footer">';
    // echo      '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
    // echo    '</div>';
    // echo  '</div>';
    // echo  '</div>';
    // echo'</div>';
  }   
}
else{
  echo '<tr>';
  echo '<td> - </td>';
  echo '<td> - </td>';
  echo '<td> - </td>';
  echo '</tr>';
}
echo '<div class="row justify-content-center">Banyak Data: '.mysqli_num_rows($result). '<div>';
?>


