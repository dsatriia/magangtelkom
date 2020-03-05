<?php
include("header.php");
require("koneksi.php");
include("guard/guard_1.php");
$id = $_SESSION['id'];
// $sto = $_GET["id"];

$cekDataStatval = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id'";
$runCekDataStatval = mysqli_query($con, $cekDataStatval);
$jumlahCekDataStatval = mysqli_num_rows($runCekDataStatval);

$cekStatvalOK = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND status_validasi = 'OK'";
$runCekStatvalOK = mysqli_query($con, $cekStatvalOK);
$jumlahCekStatvalOK = mysqli_num_rows($runCekStatvalOK);

$cekStatvalNOTOK = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND status_validasi = 'NOT OK'";
$runCekStatvalNOTOK = mysqli_query($con, $cekStatvalNOTOK);
$jumlahCekStatvalNOTOK = mysqli_num_rows($runCekStatvalNOTOK);
?>
<script src="assets/js/jquery.min.js"></script>
<script>
  $(document).ready(function () {

    // event ketika keyword ditulis
    $('#sto').on('change', function () {


      // ajax menggunakan load
      $('#container').load('ajax_reporting_ag.php?sto=' + $('#sto').val());
      
    });

    $('#tgl-end').on('change', function () {

      // ajax menggunakan load
      $('#container').load('ajax_reporting_ag.php?sto=' + $('#sto').val()  + '&tgl-start=' + $('#tgl-start').val() + '&tgl-end=' + $('#tgl-end').val() );

    });

    $('#tgl-start').on('change', function () {

    // ajax menggunakan load
    $('#container').load('ajax_reporting_ag.php?sto=' + $('#sto').val()  + '&tgl-start=' + $('#tgl-start').val() + '&tgl-end=' + $('#tgl-end').val() );

    });
  });

</script>

<body>

  <?php
include("sidebar/sidebar_dashboard_ag.php"); ?>
  <div class="main-panel">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="header">
                <h2 id="judul" class="title text-center"><b>Reporting</b></h2><br><br>
                <p class="category" style="font-size:12pt; text-align:center">
                  Nama : <?php echo $_SESSION['nama'] ?>
                  <br>
                  Kode ID : <?php echo $_SESSION['username'] ?>
                  <br><br>
                </p>
                <?php
                                    function query($query){
                                    global $con;

                                    $hasil = mysqli_query($con, $query);
                                    $rows=[];

                                    while ($row = mysqli_fetch_assoc($hasil)){
                                        $rows[] = $row;
                                    }

                                    return $rows;
                                  }
                                  // $pelanggan = query("SELECT * FROM data_pelanggan WHERE id_salesforce=$id");

                                  $kumpulanSto = query("SELECT * FROM sto WHERE id_sto != 0");
                                  $pelanggan = query("SELECT * FROM data_pelanggan WHERE id_admin_agency=$id");

                                  ?>
                <label for="sto">Pilih STO</label>                                  
                <select name="sto" id="sto">
                  <option value="">Semua STO</option>
                  <?php foreach($kumpulanSto as $s): ?>
                  <option value="<?= $s['id_sto'] ?>"><?= $s['area'] ?></option>
                  <?php endforeach ?>
                </select>
                <label style="margin-left:30px" for="tgl-start">Tanggal Mulai</label>
                <input type="date" name="tgl-start" id="tgl-start">
                <label style="margin-left:30px" for="tgl-start">Tanggal Selesai</label>
                <input type="date" name="tgl-end" id="tgl-end">
                <div id="container">
                  <br>

                  <b>
                    <p>Jumlah Data Status Validasi&emsp;&emsp;
                  </b> : <?php echo $jumlahCekDataStatval; ?>
                  </p>
                  <b>
                    <p>Jumlah Status Validasi OK&emsp;&emsp;&emsp;
                  </b> : <a href="dashboard_ag_tampil_statval_ok.php"
                    name="btn-edit"><?php echo $jumlahCekStatvalOK; ?></a></p>
                  <b>
                    <p>Jumlah Status Validasi NOT OK</b>&emsp;:
                   <a href="dashboard_ag_tampil_statval_notok.php"
                    name="btn-edit"><?php echo $jumlahCekStatvalNOTOK; ?></a></p>
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include("footer.php"); ?>

</body>