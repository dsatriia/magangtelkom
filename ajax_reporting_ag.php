<?php
require("koneksi.php");
include("guard/guard_1.php");
$id = $_SESSION['id'];
$id_sto = $_GET["sto"];






if($_GET['sto']=='' && (!isset($_GET['tgl-start']) && !isset($_GET['tgl-end']))){

    $cekDataStatval = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id'";
    $runCekDataStatval = mysqli_query($con, $cekDataStatval);
    $jumlahCekDataStatval = mysqli_num_rows($runCekDataStatval);

    $cekStatvalOK = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND status_validasi = 'OK'";
    $runCekStatvalOK = mysqli_query($con, $cekStatvalOK);
    $jumlahCekStatvalOK = mysqli_num_rows($runCekStatvalOK);

    $cekStatvalNOTOK = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND status_validasi = 'NOT OK'";
    $runCekStatvalNOTOK = mysqli_query($con, $cekStatvalNOTOK);
    $jumlahCekStatvalNOTOK = mysqli_num_rows($runCekStatvalNOTOK);

    $query = "SELECT * FROM data_pelanggan WHERE id_admin_agency=$id ";

    
} elseif($_GET['sto'] != '' & (!isset($_GET['tgl-start']) && !isset($_GET['tgl-end']))) {
    
    $cekDataStatval = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id'  AND id_sto = $id_sto";
    $runCekDataStatval = mysqli_query($con, $cekDataStatval);
    $jumlahCekDataStatval = mysqli_num_rows($runCekDataStatval);

    $cekStatvalOK = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND status_validasi = 'OK'  AND id_sto = $id_sto";
    $runCekStatvalOK = mysqli_query($con, $cekStatvalOK);
    $jumlahCekStatvalOK = mysqli_num_rows($runCekStatvalOK);

    $cekStatvalNOTOK = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND status_validasi = 'NOT OK'  AND id_sto = $id_sto";
    $runCekStatvalNOTOK = mysqli_query($con, $cekStatvalNOTOK);
    $jumlahCekStatvalNOTOK = mysqli_num_rows($runCekStatvalNOTOK);

    $query = "SELECT * FROM data_pelanggan WHERE id_admin_agency=$id AND id_sto = $id_sto ";

} elseif($_GET['sto'] != '' && $_GET['tgl-start'] !=  '' && $_GET['tgl-end'] != '') {

    $tgl_start = $_GET['tgl-start'] . ' 00:00:00';
    $tgl_end = $_GET['tgl-end'] . ' 00:00:00';

    $cekDataStatval = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id'  AND id_sto = $id_sto AND `tgl_input` >= '$tgl_start' AND `tgl_input` <=  '$tgl_end'";
    $runCekDataStatval = mysqli_query($con, $cekDataStatval);
    $jumlahCekDataStatval = mysqli_num_rows($runCekDataStatval);

    $cekStatvalOK = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND status_validasi = 'OK'  AND id_sto = $id_sto AND `tgl_input` >= '$tgl_start' AND `tgl_input` <=  '$tgl_end'";
    $runCekStatvalOK = mysqli_query($con, $cekStatvalOK);
    $jumlahCekStatvalOK = mysqli_num_rows($runCekStatvalOK);

    $cekStatvalNOTOK = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND status_validasi = 'NOT OK'  AND id_sto = $id_sto AND `tgl_input` >= '$tgl_start' AND `tgl_input` <=  '$tgl_end'";
    $runCekStatvalNOTOK = mysqli_query($con, $cekStatvalNOTOK);
    $jumlahCekStatvalNOTOK = mysqli_num_rows($runCekStatvalNOTOK);
    
    $query = "SELECT * FROM data_pelanggan WHERE id_admin_agency=$id AND id_sto = $id_sto AND `tgl_input` >= '$tgl_start' AND `tgl_input` <=  '$tgl_end'";
    
} else {
    $tgl_start = $_GET['tgl-start'] . ' 00:00:00';
    $tgl_end = $_GET['tgl-end'] . ' 00:00:00';

    $cekDataStatval = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id'  AND `tgl_input` >= '$tgl_start' AND `tgl_input` <=  '$tgl_end'";
    $runCekDataStatval = mysqli_query($con, $cekDataStatval);
    $jumlahCekDataStatval = mysqli_num_rows($runCekDataStatval);

    $cekStatvalOK = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND status_validasi = 'OK'  AND `tgl_input` >= '$tgl_start' AND `tgl_input` <=  '$tgl_end'";
    $runCekStatvalOK = mysqli_query($con, $cekStatvalOK);
    $jumlahCekStatvalOK = mysqli_num_rows($runCekStatvalOK);

    $cekStatvalNOTOK = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND status_validasi = 'NOT OK'  AND `tgl_input` >= '$tgl_start' AND `tgl_input` <=  '$tgl_end'";
    $runCekStatvalNOTOK = mysqli_query($con, $cekStatvalNOTOK);
    $jumlahCekStatvalNOTOK = mysqli_num_rows($runCekStatvalNOTOK);
    
    $query = "SELECT * FROM data_pelanggan WHERE id_admin_agency=$id AND `tgl_input` >= '$tgl_start' AND `tgl_input` <=  '$tgl_end'";
        
}

function query($query){
    global $con;

    $hasil = mysqli_query($con, $query);
    $rows=[];

    while ($row = mysqli_fetch_assoc($hasil)){
        $rows[] = $row;
    }

    return $rows;
  }




$pelanggan = query($query);



?>


<br>

<b>
    <p>Jumlah Data Status Validasi&emsp;&emsp;
</b> : <?php echo $jumlahCekDataStatval; ?>
</p>
<b>
    <p>Jumlah Status Validasi OK&emsp;&emsp;&emsp;
</b> : <a href="dashboard_ag_tampil_statval_ok.php" name="btn-edit"><?php echo $jumlahCekStatvalOK; ?></a></p>
<b>
    <p>Jumlah Status Validasi NOT OK&emsp;
</b>: <a href="dashboard_ag_tampil_statval_notok.php" name="btn-edit"><?php echo $jumlahCekStatvalNOTOK; ?></a></p>
<br>
<div class="table-responsive" style="height:45vh;overflow:scroll">
    <table class="table table-hover table-bordered text-center">
        <thead style="background-color:lightgrey">
            <th rowspan="2" class="text-center"><b>Track ID</b></th>
            <th rowspan="2" class="text-center"><b>Nama Pelanggan</b></th>
            <th rowspan="2" class="text-center"><b>Status Validasi</b></th>
        </thead>
        <tbody>

            <?php foreach($pelanggan as $p):?>
            <tr>
                <td><?php echo $p['track_id'] ?></td>
                <td><?php echo $p['nama_pelanggan'] ?></td>
                <td><?php echo $p['status_validasi'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>