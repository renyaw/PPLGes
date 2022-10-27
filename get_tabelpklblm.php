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

$batas = 10;
$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

$previous = $halaman - 1;
$next = $halaman + 1;

// // $data = mysqli_query($koneksi,"select * from pkl");
$data = $db->query("select * from pkl");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_pkl = mysqli_query($db,"select mahasiswa.nama, pkl.nim, pkl.tanggal_mulai, pkl.nilai from pkl, mahasiswa where mahasiswa.nim=pkl.nim limit $halaman_awal, $batas");
$nomor = $halaman_awal+1;

if($jml!=0){
  while ($row = $result->fetch_object()) {
    echo '<tr>';
    echo '<td>'.$nomor++. '</td>'; 
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

<nav>
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>
