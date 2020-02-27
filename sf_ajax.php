<?php
include("header.php");
require("koneksi.php");
include("guard/guard_3.php");
$id = $_SESSION['id'];
  // $id = $_GET["id"];
  // var_dump ($id);die;
  function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }

$sto = $_GET["sto"];
// var_dump ($sto);die;

$query = "SELECT * FROM data_pelanggan
          WHERE id_sto = $sto AND id_salesforce ='$id'
          ";
$pelanggan = query($query);

$id = $_SESSION['id'];
$cekDataStatval = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id'";
$runCekDataStatval = mysqli_query($con, $cekDataStatval);
$jumlahCekDataStatval = mysqli_num_rows($runCekDataStatval);

$cekStatvalOK = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id' AND status_validasi = 'OK'";
$runCekStatvalOK = mysqli_query($con, $cekStatvalOK);
$jumlahCekStatvalOK = mysqli_num_rows($runCekStatvalOK);

$cekStatvalNOTOK = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id' AND status_validasi = 'NOT OK'";
$runCekStatvalNOTOK = mysqli_query($con, $cekStatvalNOTOK);
$jumlahCekStatvalNOTOK = mysqli_num_rows($runCekStatvalNOTOK);

// var_dump($mahasiswa);


?>
<br>
<table class="table table-hover table-bordered text-center">
  <thead style="background-color:lightgrey">
    <th rowspan="2" class="text-center"><b>Track ID</b></th>
    <th rowspan="2" class="text-center"><b>Nama Pelanggan</b></th>
    <th rowspan="2" class="text-center"><b>Status Validasi</b></th>
    </thead>
<tbody>

<?php foreach($pelanggan as $p): ?>
<tr>
  <td><?php echo $p['track_id'] ?></td>
  <td><?php echo $p['nama_pelanggan'] ?></td>
  <td><?php echo $p['status_validasi'] ?></td>
</tr>
    <?php endforeach ?>
  </tbody>
</table>
