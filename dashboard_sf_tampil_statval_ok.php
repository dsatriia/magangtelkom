<?php 
include("header.php");
require("koneksi.php");
include("guard/guard_3.php");
$id = $_SESSION['id'];

  $cekOK = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id' AND status_validasi = 'OK'";
  $runCekOK = mysqli_query($con, $cekOK);
  $jumlahCekOK = mysqli_num_rows($runCekOK);

  $cekOKProg = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id' AND kategori_progress_psb = 'OK'";
  $runCekOKProg = mysqli_query($con, $cekOKProg);
  $jumlahCekOKProg = mysqli_num_rows($runCekOKProg);

  $cekNOTOKProg = "SELECT * FROM data_pelanggan WHERE id_salesforce='$id' AND kategori_progress_psb = 'NOT OK'";
  $runCekNOTOKProg = mysqli_query($con, $cekNOTOKProg);
  $jumlahCekNOTOKProg = mysqli_num_rows($runCekNOTOKProg);
  ?>

<body>


<?php
include("sidebar/sidebar_dashboard_sf.php"); ?>
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title text-center"><b>Kategori Progress PSB</b></h2><br><br>
                                <p class="category" style="font-size:12pt;">
                                        Jumlah Data&emsp;&emsp;: <?php echo $jumlahCekOK; ?>
                                            <br>
                                        Jumlah OK&emsp;&emsp;&emsp;: <?php echo $jumlahCekOKProg; ?>
                                            <br>
                                        Jumlah NOT OK : <?php echo $jumlahCekNOTOKProg; ?>
                                <br><br>
                              </div>
                            <div class="content">
                              <div class="table-responsive" style="height:70vh;overflow:scroll">
                                  <?php include("dashboard_sf_tabel_statval_ok.php"); ?>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>

</body>

