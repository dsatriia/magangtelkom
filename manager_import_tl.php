<?php
require("koneksi.php");
include("header.php"); ?>

<body>
    <?php
include("guard/guard_8.php");
$id = $_SESSION['id'];



?>
    <?php include("sidebar/sidebar_list_manager.php"); ?>
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title text-center"><b>Import Data Excel</b></h2>
                                <br>
                                <p class="text-center" style="font-size:16pt">Format Data (.xls)</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <main>
                                    <div class="container">
                                        <form method="post" enctype="multipart/form-data"
                                            action="upload_aksi_manager_tl.php">
                                            Pilih File:
                                            <input class="border-input" name="filepelanggan" type="file"
                                                required="required"><br>
                                            <input class="btn btn-info" name="upload" type="submit"
                                                value="Import">
                                        </form>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
