<?php include("header.php");
require("koneksi.php");

include("guard/guard_8.php");

if ($_GET['berhasil'] > 0){
    $berhasil = $_GET['berhasil'];
    echo '<script language="JavaScript">
    alert("Berhasil mengimport : '. $berhasil.' data.");
    </script>';
} else {
    echo '<script language="JavaScript">
    alert("Tidak ada data yang diimport.");
    </script>';
}
?>
<body>

<?php
include("sidebar/sidebar_dataplg_manager.php"); ?>
    <div class="main-panel">


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title text-center"><b>Data Pelanggan</b></h2>
                                <a class="btn btn-success" href="manager_input.php" style="font-size:15pt">+ Input Data
                                    Baru</a><br>
                                    <br>
                                <a class="btn btn-success" href="import_data_pelanggan.php"style="font-size:15pt">Import Data Excel</a>
                                <br>

                            </div>

                            <div class="content">
                              <div class="table-responsive" style="height:70vh;overflow:scroll">
                                  <?php include("manager_tabel.php"); ?>
                              </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>



        </div>
        <?php include("footer.php"); ?>

</body>
