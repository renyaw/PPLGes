



<table class="table table-hover text-center table-bordered">
            <thead>
              <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Email</th>
                <th scope="col">Semester</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <?php
              
              $result = $db->query("SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.email, khs.smt, khs.status FROM mahasiswa,khs");
              while($row=$result->fetch_object()){
                echo '<tr>';
                echo "<td>" . $row->nim . "</td>";
                echo "<td>" . $row->nama . "</td>";
                echo "<td>" . $row->email . "</td>";
                echo "<td>" . $row->smt . "</td>";
                echo "<td>" . $row->status . "</td>";
                echo '</tr>';
              }
              ?>
          </table>