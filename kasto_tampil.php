<?php include("header.php");
require("koneksi.php");

include("guard/guard_10.php");

if ($_GET['berhasil'] > 0){
    $berhasil = $_GET['berhasil'];
    echo '<script language="JavaScript">
    alert("Berhasil Mengimport : '. $berhasil.' Data!");
    </script>';
} else {
    // echo '<script language="JavaScript">
    // alert("Tidak ada data yang diimport.");
    // </script>';
}
?>
<body>

<?php
include("sidebar/sidebar_dataplg_kasto.php"); ?>
    <div class="main-panel">


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title text-center"><b>Data Pelanggan</b></h2>
                                <br><br>
                                <a class="btn btn-success" href="kasto_input.php" style="font-size:12pt">+ Input Data
                                    Baru</a>
                                <!-- <a class="btn btn-success" href="kasto_import_data_pelanggan.php"style="font-size:12pt">Import Data Excel</a> -->
                                <br><br><br>

                                <form action="" method="post">
                                  <a class="form-group">
                                      <input name="kata-kunci1" class="search" type="text" placeholder="Cari Track ID">
                                      <button name="cari1" type="submit">Cari</button>
                                  </a>
                                  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <form action="" method="post">
                                  <a class="form-group">
                                    <input name="kata-kunci2" class="search" type="text" placeholder="Cari Nama Pelanggan">
                                      <button name="cari2" type="submit">Cari</button>
                                  </a>
                                  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <form action="" method="post">
                                  <a class="form-group">
                                      <input name="kata-kunci3" class="search" type="text" placeholder="Cari Tanggal Input Data">
                                      <button name="cari3" type="submit">Cari</button>
                                  </a>

                                  <a>
                                      <form method=post action=kasto_tampil.php>
                                      <button type="submit" name="submit">Kembali</button>
                                    </form>
                                  </a>
                                  </form>
                              </div>
                            <div class="content">
                              <div class="table-responsive" style="height:60vh;overflow:scroll">
                                  <?php include("kasto_tabel.php"); ?>
                              </div>



                            </div>


                        </div>
                    </div>
                </div>
            </div>



        </div>
        <?php include("footer.php"); ?>

</body>
