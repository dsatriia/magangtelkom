<?php
include("header.php");
require("koneksi.php");
include("guard/guard_4.php")
?>
<body>
<?php
include("sidebar/sidebar_dataplg_inputer.php"); ?>
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title text-center"><b>Data Pelanggan</b></h2>
                                <br><br><br>
                                <form action="" method="post">
                                  <div class="form-group">
                                      <input name="kata-kunci" class="form-control border-input" type="text" placeholder="Masukkan kata kunci pencarian...">
                                      <button name="cari" type="submit">Cari</button>
                                      <form method=post action=inputer_tampil.php>
                                      <button type="submit" name="submit">Kembali</button>
                                  </div>
                                      </form>
                                </form>
                            </div>
                            <div class="content">
                              <div class="table-responsive" style="height:70vh;overflow:scroll">
                                  <?php include("inputer_tabel.php"); ?>
                              </div>
				<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
</body>
