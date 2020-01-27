<?php
require("koneksi.php");
include("header.php"); ?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/ie-emulation-modes-warning.js"></script>

<body>
    <?php
include("guard/guard_10.php");
$id = $_SESSION['id'];



?>
    <?php include("sidebar/sidebar_dataplg_kasto.php"); ?>
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
                                            action="kasto_upload_aksi.php">
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
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-chained.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script>
            $(document).ready(function () {
                $("#id_admin_agency").chained("#id_agency");
                $("#id_supervisor").chained("#id_admin_agency");
                $("#id_salesforce").chained("#id_supervisor");

            });
        </script>
        <?php include("footer.php"); ?>
