<?php
require_once('db_login.php');
$id=$_GET['id'];
$query = $db->query("SELECT mahasiswa.nama, mahasiswa.nim, mahasiswa.angkatan, khs.status as stat, khs.ip_kumulatif as ipk from mahasiswa inner join khs where mahasiswa.nim=khs.nim and mahasiswa.angkatan='$id';");
$query2= $db->query("SELECT mahasiswa.nama, mahasiswa.nim, mahasiswa.angkatan, khs.status as stat, khs.ip_kumulatif as ipk from mahasiswa inner join khs where mahasiswa.nim=khs.nim;");

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
    echo '<td>'.$row->stat.'</td>';
    echo '<td>'.$row->angkatan.'</td>';
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
?>

    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
      Launch
    </button>
    
    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTitleId">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Body
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>