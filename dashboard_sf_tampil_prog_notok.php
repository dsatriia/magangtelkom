<?php 
include("header.php");
require("koneksi.php");
include("guard/guard_3.php")
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
                                <h2 class="title text-center"><b>Progress Kategori</b></h2><br><br>
                                <h2 class="title text-center"><b>( NOT OK )</b></h2><br><br>
                              </div>
                            <div class="content">
                              <div class="table-responsive" style="height:70vh;overflow:scroll">
                                  <?php include("dashboard_sf_tabel_prog_notok.php"); ?>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>

</body>

