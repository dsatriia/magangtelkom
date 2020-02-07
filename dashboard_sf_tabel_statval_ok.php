<?php
include("koneksi.php");
$id = $_SESSION['id'];

  $cekData = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id'";
  $runCekData = mysqli_query($con, $cekData);
  $jumlahCekData = mysqli_num_rows($runCekData);

  $cekOK = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id' AND kategori_progress_psb = 'OK'";
  $runCekOK = mysqli_query($con, $cekOK);
  $jumlahCekOK = mysqli_num_rows($runCekOK);

  $cekNOTOK = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id' AND kategori_progress_psb = 'NOT OK'";
  $runCekNOTOK = mysqli_query($con, $cekNOTOK);
  $jumlahCekNOTOK = mysqli_num_rows($runCekNOTOK);

  ?>

    <table class="table table-hover table-bordered text-center">
  <!-- <thead style="background-color:lightgrey"> -->
    <th rowspan="2" class="text-center"><b>Jumlah Data</b></th>
    <th colspan="2" class="text-center"><b>Kategori Progress PSB</b></th>
      <tr>
          <th class="text-center"><b>OK</b></th>
          <th class="text-center"><b>NOT OK</b></th>
      </tr>
    </thead>
<tbody>

    <td><?php echo $jumlahCekData ?></td>
    <td><a href="dashboard_sf_tampil_prog_ok.php" name="btn-edit"><?php echo $jumlahCekOK ?></a></td>
    <td><a href="dashboard_sf_tampil_prog_notok.php" name="btn-edit"><?php echo $jumlahCekNOTOK ?></a></td>