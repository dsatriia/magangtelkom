<?php include("header.php");
require("koneksi.php");

include("guard/guard_3.php")
?>

<body>

    <?php
include("sidebar/sidebar_dataplg_sf.php"); ?>
    <div class="main-panel">
        <!-- <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title text-center"><b>Data Pelanggan</b></h2>
                                <!-- <a class="btn btn-success" href="ag_input.php" style="font-size:15pt">+ Input Data
                                    Baru</a><br> -->
                                <br><br><br>
                                <form action="" method="post">
                                  <div class="form-group">
                                      <input name="kata-kunci" class="form-control border-input" type="text" placeholder="Masukkan kata kunci pencarian...">
                                      <button name="cari" type="submit">Cari</button>
                                      <form method=post action=sf_tampil.php>
                                      <button type="submit" name="submit">Kembali</button>
                                  </div>
                                      </form>
                                </form>
                            </div>

                            <div class="content">
                              <div class="table-responsive" style="height:70vh;overflow:scroll">
                                  <?php include("sf_tabel.php"); ?>
                              </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>



        </div>
        <?php include("footer.php"); ?>

</body>
