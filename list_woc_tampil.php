<?php
include("header.php");
require("koneksi.php");
?>
<body>

<?php
include("sidebar/sidebar_list_user.php"); ?>
    <div class="main-panel">
        <!-- <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"
                </div>
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
                                <h2 class="title text-center"><b>List Anggota WOC</b></h2>
                                <a class="btn btn-success" href="list_woc_input.php" style="font-size:15pt">+ Tambah User
                                    Baru</a><br>
                                <br>
                            </div>

                            <div class="content">
                              <div class="table-responsive">
                                  <?php include("list_woc_tabel.php"); ?>
                              </div>
                              <form method=post action=list_user_tampil.php>
                              <button type="submit" class="btn btn-success" name="btn-back">Kembali</button>

                            </div>


                        </div>
                    </div>
                </div>
            </div>



        </div>

        <?php include("footer.php"); ?>
</body>
