<?php
include("header.php");
require("koneksi.php");
include("guard/guard_1.php")
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
                                <h2 class="title text-center"><b>( NOT OK )</b></h2><br><br>
                              </div>
                            <div class="content">
                              <div class="table-responsive" style="height:65vh;overflow:scroll">
                                  <?php include("dashboard_ag_tabel_statval_notok.php"); ?>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>

</body>
