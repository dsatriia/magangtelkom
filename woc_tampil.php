<?php include("header.php");
require("koneksi.php");

include("guard/guard_7.php")
?>
<body>

<?php
include("sidebar/sidebar_dataplg_woc.php"); ?>
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
                            <h2 class="title text-center"><b>Data Pelanggan</b></h2>
                            </div>
                            <div class="content">
                                <div class="table-responsive" style="overflow:scroll">
                                    <?php include("woc_tabel.php"); ?>
                                </div>                            <!-- <a href="ag_input.php" style="font-size:15pt">Input Data Baru</a><br>
				<br> -->
				<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include("footer.php"); ?>
</body>
