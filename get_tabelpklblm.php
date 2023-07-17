<?php
require_once('db_login.php');
$id = $_GET['id'];

$query = $db->query("SELECT mahasiswa.nama, mahasiswa.nim, dosen.nama  as namadosen, mahasiswa.angkatan from pkl inner join mahasiswa inner join dosen where mahasiswa.nim=pkl.nim and dosen.kode_wali=mahasiswa.kode_wali and stat = 'Belum Lulus' and mahasiswa.angkatan='$id';");
$query2 = $db->query("SELECT mahasiswa.nama, mahasiswa.nim, dosen.nama  as namadosen, mahasiswa.angkatan from pkl inner join mahasiswa inner join dosen where mahasiswa.nim=pkl.nim and dosen.kode_wali=mahasiswa.kode_wali and stat = 'Belum Lulus' ;");

if ($id != 'x') {
    $result = $query;
} else {
    $result = $query2;
}

$jml = mysqli_num_rows($result);

$batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

// // $data = mysqli_query($koneksi,"select * from pkl");
$data = $db->query("select * from pkl");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_pkl = mysqli_query($db, "select mahasiswa.nama, pkl.nim, pkl.tanggal_mulai, pkl.nilai from pkl, mahasiswa where mahasiswa.nim=pkl.nim limit $halaman_awal, $batas");
$nomor = $halaman_awal + 1;

if ($jml != 0) {
    while ($row = $result->fetch_object()) {
        echo '<tr>';
        echo '<td>' . $row->nama . '</td>';
        echo '<td>' . $row->nim . '</td>';
        echo '<td>' . $row->namadosen . '</td>';
        echo '<td>' . $row->angkatan . '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr>';
    echo '<td> - </td>';
    echo '<td> - </td>';
    echo '<td> - </td>';
    echo '<td> - </td>';
    echo '</tr>';
}
