BUAT SRS 9

// Search GIMANA YA CARA MASUKINNYA ANJIR
if(isset($_GET["search"])){
  $filter = $_GET["search"];
  $query3 = "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs WHERE CONCAT(mahasiswa.nama, mahasiswa.email) LIKE '%filter%'";
  $query3_run = mysqli_query($db, $query3);

  if(mysqli_num_rows($query3_run)>0){
    while ($row = $query3_run->fetch_object()) {
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
  } else{
    ?>
      <tr>
        <td colspan="6">Tidak Ada Data</td>
      </tr>
    <?php
  }
}
// End Search