<?php
include("header.php");
require("koneksi.php");
include("guard/guard_1.php");
$id = $_SESSION['id'];
$sto = $_GET["sto"];

$cekDataStatval = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND id_sto = $sto";
$runCekDataStatval = mysqli_query($con, $cekDataStatval);
$jumlahCekDataStatval = mysqli_num_rows($runCekDataStatval);

$cekStatvalOK = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND status_validasi = 'OK' AND id_sto = $sto";
$runCekStatvalOK = mysqli_query($con, $cekStatvalOK);
$jumlahCekStatvalOK = mysqli_num_rows($runCekStatvalOK);

$cekStatvalNOTOK = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND status_validasi = 'NOT OK' AND id_sto = $sto";
$runCekStatvalNOTOK = mysqli_query($con, $cekStatvalNOTOK);
$jumlahCekStatvalNOTOK = mysqli_num_rows($runCekStatvalNOTOK);
?>

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
                                <h2 class="title text-center"><b>Reporting</b></h2><br><br>
                                <p class="category" style="font-size:12pt; text-align:center">
                                        Nama : <?php echo $_SESSION['nama'] ?>
                                            <br>
                                        Kode ID : <?php echo $_SESSION['username'] ?>
                                <br><br>
                                <b><p>Jumlah Data Status Validasi&emsp;&emsp;</b> :  <?php echo $jumlahCekDataStatval; ?></p>
                                <b><p>Jumlah Status Validasi OK&emsp;&emsp;&emsp;</b> :  <a href="dashboard_ag_tampil_statval_ok.php" name="btn-edit"><?php echo $jumlahCekStatvalOK; ?></a></p>
                                <b><p>Jumlah Status Validasi NOT OK</b>&emsp;:<a href="dashboard_ag_tampil_statval_notok.php" name="btn-edit"><?php echo $jumlahCekStatvalNOTOK; ?></a></p>
                        <br>
                              </div>
                            <div class="content">
                              <div class="table-responsive" style="height:50vh;overflow:scroll">
                                  <?php include("dashboard_ag_tabel.php"); ?>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>

</body>
<!-- <script src="assets/js/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // var keyword = document.getElementById('keyword');
  // keyword.addEventListener('keyup', function(){
  //   alert('oke');
  // });

  // event ketika keyword ditulis
  $('#sto').on('change',function(){
    $.get('sf_ajax.php?sto=' + $('#sto').val(), function(data){
      $('#container').html(data);
      console.log('haloo');
    });
  });
});

</script> -->
