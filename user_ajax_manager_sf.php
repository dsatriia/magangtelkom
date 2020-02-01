<?php
  include("koneksi.php");
  function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }

$agency = $_GET["agency"];

$query = "SELECT * FROM admin_agency
          WHERE id_agency = $agency
          ";
$kumpulanUser = query($query);


// var_dump($mahasiswa);


?>
<table class="table table-hover table-bordered text-center">
  <thead style="background-color:lightgrey">
    <tr>
      <th rowspan="2" class="text-center"><b>Nama</b></th>
      <th rowspan="2" class="text-center"><b>Kode</b></th>
      <th rowspan="2" class="text-center"><b>Email</b></th>
      <th rowspan="2" class="text-center"><b>Telpon</b></th>
      <th rowspan="2" class="text-center"><b>HP</b></th>
      <th rowspan="2" class="text-center"><b>Agency</b></th>
      <th rowspan="2" class="text-center"><b>Admin Agency</b></th>
      <th rowspan="2" class="text-center"><b>Supervisor</b></th>
      <th rowspan="2" class="text-center"><b>Regional</b></th>
      <th rowspan="2" class="text-center"><b>Witel</b></th>
      <th rowspan="2" class="text-center"><b>Datel</b></th>
      <th rowspan="2" class="text-center"><b>Tanggal Aktif</b></th>
      <th rowspan="2" class="text-center"><b>Jabatan</b></th>
      <th rowspan="2" class="text-center"><b>Action</b></th>
    </tr>
    </tr>
  </thead>
<tbody>
<?php foreach($kumpulanUser as $user): ?>
<tr>
          <td><?php echo $user['nama'] ?></td>
          <td><?php echo $user['username'] ?></td>
          <td><?php echo $user['email'] ?></td>
          <td><?php echo $user['telpon'] ?></td>
          <td><?php echo $user['hp'] ?></td>
          <?php
            if($user['id_agency'] == 1){
              $Agency = 'MEGA CREATIVE PROMOSINDO';
            } elseif($user['id_agency'] == 2){
              $Agency= 'A';
            }elseif($user['id_agency'] == 3){
              $Agency= 'B';
            }elseif($user['id_agency'] == 4){
              $Agency = 'C';
            }elseif($user['id_agency'] == 5){
              $Agency= 'D';
            }elseif($user['id_agency'] == 6){
              $Agency= 'E';
            }elseif($user['id_agency'] == 7){
              $Agency= 'F';
            }elseif($user['id_agency'] == 8){
              $Agency= 'G';
            }elseif($user['id_agency'] == 9){
              $Agency= 'H';
            } elseif($user['id_agency'] == 10){
              $Agency= 'I';
            } elseif($user['id_agency'] == 11){
              $Agency= 'J';
            } elseif($user['id_agency'] == 12){
              $Agency= 'K';
            } elseif($user['id_agency'] == 13){
              $Agency= 'L';
            } elseif($user['id_agency'] == 14){
              $Agency= 'M';
            } elseif($user['id_agency'] == 15){
              $Agency= 'N';
            } elseif($user['id_agency'] == 16){
              $Agency = 'O';
            }
          ?>
          <td><?= $Agency ?></td>
          <td><?php
            if ($user['id_admin_agency'] == 0){
              $admin_agency= 'Tidak Ada';
            } else {
              $id_admin_agency = $user['id_admin_agency'];
              $query_admin_agency = "SELECT nama FROM admin_agency WHERE id_admin_agency = $id_admin_agency";
              $run_admin_agency = mysqli_query($con, $query_admin_agency);
              $hasil_admin_agency = mysqli_fetch_array($run_admin_agency);
              $admin_agency = $hasil_admin_agency['nama'];
            }
            echo $admin_agency ?>
          </td>
          <td>
          <?php
          if ($user['id_supervisor'] == 0){
            $spv = 'Tidak Ada';
          } else {
            $id_supervisor = $user['id_supervisor'];
            $query_supervisor = "SELECT nama FROM supervisor WHERE id_supervisor = $id_supervisor";
            $run_supervisor = mysqli_query($con, $query_supervisor);
            $hasil_supervisor = mysqli_fetch_array($run_supervisor);
            $supervisor = $hasil_supervisor['nama'];
          }
          echo $supervisor ?>
          </td>
          <td><?php echo $user['regional'] ?></td>
          <td><?php echo $user['witel'] ?></td>
          <td><?php echo $user['datel'] ?></td>
          <td><?php echo $user['tanggal_aktif'] ?></td>
          <?php
           $akses = $user['akses'];
           $kumpulanAkses = query("SELECT * FROM jabatan WHERE id_jabatan = $id_jabatan");
           $namaJabatan = $kumpulanNamaJabatan[0]['nama_jabatan'];
           ?>
           <td><?= $namaJabatan ?></td>>

          <td><a href="manager_edit_sf.php?id=<?= $user['id'] ?>" name="btn-edit"
              onclick="return confirm(&quot;Yakin Ingin Mengedit Data User?&quot;);">Edit</a> | <a
              href="manager_hapus_sf.php?id=<?= $user['id'] ?>" name="btn-edit"
              onclick="return confirm(&quot;Yakin Ingin Menghapus User?&quot;);">Delete</a></td>
            </tr>
            <?php endforeach ?>
            </tbody>
            </table>
