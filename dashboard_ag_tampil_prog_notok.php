<?php
include("header.php");
require("koneksi.php");
include("guard/guard_1.php");
$id = $_SESSION['id'];

  $cekOK = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND status_validasi = 'OK'";
  $runCekOK = mysqli_query($con, $cekOK);
  $jumlahCekOK = mysqli_num_rows($runCekOK);

  $cekOKProg = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND kategori_progress_psb = 'OK' AND status_validasi = 'OK'";
  $runCekOKProg = mysqli_query($con, $cekOKProg);
  $jumlahCekOKProg = mysqli_num_rows($runCekOKProg);

  $cekNOTOKProg = "SELECT * FROM data_pelanggan WHERE id_admin_agency='$id' AND kategori_progress_psb = 'NOT OK' AND status_validasi = 'OK'";
  $runCekNOTOKProg = mysqli_query($con, $cekNOTOKProg);
  $jumlahCekNOTOKProg = mysqli_num_rows($runCekNOTOKProg);
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
                              <form method=post action=dashboard_ag.php>
                              <button type="submit" name="submit">Kembali</button>
                              </form>
                              <h2 class="title text-center"><b>Status Validasi</b></h2><br><br>
                              <h2 class="title text-center"><b>( OK )</b></h2><br><br>
                              <!-- <p class="category" style="font-size:12pt;"> -->
                                      <b><p>Jumlah Data Progress PSB&emsp;&emsp;</b> :  <a href="dashboard_ag_tampil_statval_ok.php" name="btn-edit"><?php echo $jumlahCekOK; ?></a></p>
                                      <b><p>Jumlah Progress PSB OK&emsp;&emsp;&emsp;</b> :  <a href="dashboard_ag_tampil_prog_ok.php" name="btn-edit"><?php echo $jumlahCekOKProg; ?></a></p>
                                      <b><p>Jumlah Progress PSB NOT OK&emsp;</b>:  <a href="dashboard_ag_tampil_prog_notok.php" name="btn-edit"><?php echo $jumlahCekNOTOKProg; ?></a></p>
                              <br>
                              </div>
                            <div class="content">
                              <div class="table-responsive" style="height:48vh;overflow:scroll">
                                  <?php include("dashboard_ag_tabel_prog_notok.php"); ?>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>

</body>
