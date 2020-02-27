<?php
include("koneksi.php");
$id = $_SESSION['id'];

  // $cekData = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id' AND status_validasi = 'OK'";
  // $runCekData = mysqli_query($con, $cekData);
  // $jumlahCekData = mysqli_num_rows($runCekData);
  //
  // $cekOK = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id' AND kategori_progress_psb = 'OK' AND status_validasi = 'OK'";
  // $runCekOK = mysqli_query($con, $cekOK);
  // $jumlahCekOK = mysqli_num_rows($runCekOK);
  //
  // $cekNOTOK = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id' AND kategori_progress_psb = 'NOT OK' AND status_validasi = 'OK'";
  // $runCekNOTOK = mysqli_query($con, $cekNOTOK);
  // $jumlahCekNOTOK = mysqli_num_rows($runCekNOTOK);

  function query($query){
    global $con;

    $hasil = mysqli_query($con, $query);
    $rows=[];

    while ($row = mysqli_fetch_assoc($hasil)){
        $rows[] = $row;
    }

    return $rows;
  }
  $pelanggan = query("SELECT * FROM data_pelanggan WHERE id_admin_agency=$id AND status_validasi='OK'");
  ?>
<br>
  <table class="table table-hover table-bordered text-center">
  <thead style="background-color:lightgrey">
    <th rowspan="2" class="text-center"><b>Track ID</b></th>
    <th rowspan="2" class="text-center"><b>Nama Pelanggan</b></th>
    <th colspan="2" class="text-center"><b>Kategori Progress PSB</b></th>
    </thead>
<tbody>

  <?php
  foreach($pelanggan as $p){
  echo "<tr>"; ?>
    <td><?php echo $p['track_id'] ?></td>
    <td><?php echo $p['nama_pelanggan'] ?></td>
    <td><?php echo $p['kategori_progress_psb'] ?></td>
  <?php echo "</tr>";
         }
  ?>
  </tbody>
  </table>
