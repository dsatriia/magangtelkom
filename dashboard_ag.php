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

                                  ?>
                                <p><select name="sto" id="sto">
                                  <option value="">Pilih STO</option>
                                  <?php foreach($kumpulanSto as $s): ?>
                                    <option value="<?= $s['id_sto'] ?>"><?= $s['area'] ?></option>
                                  <?php endforeach ?>
                                </select>
                                <div id="container">
                                <br></p>

                                <b><p>Jumlah Data Status Validasi&emsp;&emsp;</b> :  <?php echo $jumlahCekDataStatval; ?></p>
                                <b><p>Jumlah Status Validasi OK&emsp;&emsp;&emsp;</b> :  <a href="dashboard_ag_tampil_statval_ok.php" name="btn-edit"><?php echo $jumlahCekStatvalOK; ?></a></p>
                                <b><p>Jumlah Status Validasi NOT OK&emsp;</b>:  <a href="dashboard_ag_tampil_statval_notok.php" name="btn-edit"><?php echo $jumlahCekStatvalNOTOK; ?></a></p>
                        <br>
                              </div>
                            <div class="content">
                              <div class="table-responsive" style="height:45vh;overflow:scroll">
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
