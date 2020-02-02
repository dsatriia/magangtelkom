<?php
include("header.php");
require("koneksi.php");
?>
<body>

<?php
include("sidebar/sidebar_list_manager.php"); ?>
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title text-center"><b>List Anggota PIC Witel</b></h2><br><br>
                                <br><br>
                                <a class="btn btn-success" href="manager_input_picwitel.php" style="font-size:12pt">+ Input User Baru</a>
                                <a class="btn btn-success" href="manager_import_picwitel.php"style="font-size:12pt">Import Data Excel</a>
                                <br><br><br>
                                <form action="" method="post">
                                  <div class="form-group">
                                      <input name="kata-kunci" class="form-control border-input" type="text" placeholder="Masukkan kata kunci pencarian...">
                                      <button name="cari" type="submit">Cari</button>
                                      <form method=post action=manager_tampil_picwitel.php>
                                      <button type="submit" name="submit">Kembali</button>
                                  </div>
                                      </form>
                                </form>
                            </div>

                            <div class="content">
                              <div class="table-responsive" style="height:70vh;overflow:scroll">
                                  <?php include("manager_tabel_picwitel.php"); ?>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
