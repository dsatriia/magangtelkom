<?php
  include("koneksi.php");
  // $id = $_SESSION['id'];
  // var_dump ($query);
  function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }

  function cari($keyword){
    // $id = $_SESSION['id'];
    $query = "SELECT * FROM salesforce
              WHERE id_salesforce != 0 AND (
              nama LIKE '%$keyword%' OR
              username LIKE '%$keyword%' OR
              tanggal_aktif LIKE '%$keyword%')";

    return query($query);
  }

  // $kumpulanUser = query("SELECT * FROM supervisor WHERE id_supervisor != 0 ORDER BY id_agency");
  $kumpulanUser = query("SELECT * FROM salesforce WHERE id_salesforce != 0");

  if (isset($_POST['cari'])) {
    $kumpulanUser = cari($_POST["kata-kunci"]);
  }
?>

<div id="container">
<br>
<table class="table table-hover table-bordered text-center">
    <thead style="background-color:lightgrey" >
      <th rowspan="2" class="text-center"><b>Nama</b></th>
      <th rowspan="2" class="text-center"><b>Kode ID</b></th>
      <th rowspan="2" class="text-center"><b>Email</b></th>
      <th rowspan="2" class="text-center"><b>Telpon</b></th>
      <th rowspan="2" class="text-center"><b>HP</b></th>
      <th rowspan="2" class="text-center"><b>Agency</b></th>
      <th rowspan="2" class="text-center"><b>Supervisor</b></th>
      <th rowspan="2" class="text-center"><b>Regional</b></th>
      <th rowspan="2" class="text-center"><b>Witel</b></th>
      <th rowspan="2" class="text-center"><b>Datel</b></th>
      <th rowspan="2" class="text-center"><b>Tanggal Aktif</b></th>
      <th rowspan="2" class="text-center"><b>Jabatan</b></th>
      <th rowspan="2" class="text-center"><b>Action</b></th>
    </thead>
<tbody>
<?php
// $id = $_SESSION['id'];
foreach($kumpulanUser as $user): ?>
<tr>
            <td><?php echo $user['nama'] ?></td>
            <td><?php echo $user['username'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['telpon'] ?></td>
            <td><?php echo $user['hp'] ?></td>
            <td>
            <?php
            if ($user['id_agency'] == 0){
              $spv = 'Tidak Ada';
            } else {
              $id_agency = $user['id_agency'];
              $query_agency = "SELECT nama_agency FROM agency WHERE id_agency = $id_agency";
              $run_agency = mysqli_query($con, $query_agency);
              $hasil_agency = mysqli_fetch_array($run_agency);
              $agency = $hasil_agency['nama_agency'];
            }
            echo $agency ?>
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
            <td><?php
               if ($user['akses'] == 0){
                 $akses= 'Tidak Ada';
               } else {
                 $akses = $user['akses'];
                 $query_jabatan = "SELECT nama_jabatan FROM jabatan WHERE id_jabatan = $akses";
                 $run_jabatan = mysqli_query($con, $query_jabatan);
                 $hasil_jabatan = mysqli_fetch_array($run_jabatan);
                 $jabatan = $hasil_jabatan['nama_jabatan'];
               }
               echo $jabatan ?>
             </td>

            <td><a href="manager_edit_sf.php?id_salesforce=<?= $user['id_salesforce'] ?>" name="btn-edit"
                onclick="return confirm(&quot;Yakin Ingin Mengedit Data User?&quot;);">Edit</a> | <a
                href="manager_hapus_sf.php?id_salesforce=<?= $user['id_salesforce'] ?>" name="btn-edit"
                onclick="return confirm(&quot;Yakin Ingin Menghapus User?&quot;);">Delete</a></td>
              </tr>
              <?php endforeach ?>
              </tbody>
              </table>
              </div>
