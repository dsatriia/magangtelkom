<?php
include("koneksi.php");
$id = $_SESSION['id'];

$cekData = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id'";
$runCekData = mysqli_query($con, $cekData);
$jumlahCekData = mysqli_num_rows($runCekData);

$cekOK = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id' AND status_validasi = 'OK'";
$runCekOK = mysqli_query($con, $cekOK);
$jumlahCekOK = mysqli_num_rows($runCekOK);

$cekNOTOK = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id' AND status_validasi = 'NOT OK'";
$runCekNOTOK = mysqli_query($con, $cekNOTOK);
$jumlahCekNOTOK = mysqli_num_rows($runCekNOTOK);

?>

<div class="form-group">
  <select name="id_sto" autocomplete="off" required>
    <option value="">Pilih STO</option>
    <?php $query = mysqli_query($con, "SELECT * FROM sto");
    while ($row = mysqli_fetch_array($query)) { ?>
      <option id="id_sto"  value="<?php echo $row['id_sto']; ?>">
        <?php echo $row['area']; ?>
      </option>
    <?php } ?>
  </select>
&emsp;&emsp;&emsp;
  <select name="tgl_input" autocomplete="off" required>
    <option value="">Pilih Durasi Tanggal</option>
    <?php $query = mysqli_query($con, "SELECT * FROM data_pelanggan");
    while ($row = mysqli_fetch_array($query)) { ?>
      <option id="tgl_input"  value="<?php echo $row['tgl_input']; ?>">
        <?php echo $row['tgl_input']; ?>
      </option>
    <?php } ?>
  </select>
</div>

<table class="table table-hover table-bordered text-center">
<thead style="background-color:lightgrey">
  <th rowspan="2" class="text-center"><b>Jumlah Data</b></th>
  <th colspan="2" class="text-center"><b>Status Validasi</b></th>
    <tr>
        <th class="text-center"><b>OK</b></th>
        <th class="text-center"><b>NOT OK</b></th>
    </tr>
  </thead>
<tbody>

  <td><?php echo $jumlahCekData ?></td>
  <td><a href="dashboard_sf_tampil_statval_ok.php" name="btn-edit"><?php echo $jumlahCekOK ?></a></td>
  <td><a href="dashboard_sf_tampil_statval_notok.php" name="btn-edit"><?php echo $jumlahCekNOTOK ?></a></td>
