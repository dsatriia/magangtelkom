<?php
include("header.php");
require("koneksi.php");
?>
<body>

<?php
include("sidebar/sidebar_list_picwitel.php"); ?>
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title text-center"><b>List Anggota WOC</b></h2><br><br>
                                <br><br>
                                <a class="btn btn-success" href="picwitel_input_woc.php" style="font-size:12pt">+ Input User Baru</a>
                                <a class="btn btn-success" href="picwitel_import_user.php"style="font-size:12pt">Import Data Excel</a>
                                <br><br><br>
                                <form action="" method="post">
                                  <a class="form-group">
                                      <input name="kata-kunci1" class="search" type="text" placeholder="Cari Nama">
                                      <button name="cari1" type="submit">Cari</button>
                                  </a>
                                  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <form action="" method="post">
                                  <a class="form-group">
                                    <input name="kata-kunci2" class="search" type="text" placeholder="Cari Kode ID">
                                      <button name="cari2" type="submit">Cari</button>
                                  </a>
                                  <a>
                                      <form method=post action=picwitel_tampil_woc.php>
                                      <button type="submit" name="submit">Kembali</button>
                                    </form>
                                  </a>
                                  </form>
                              </div>
                            <div class="content">
                              <div class="table-responsive" style="height:55vh;overflow:scroll">
                                  <?php include("picwitel_tabel_woc.php"); ?>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
