<?php include("header.php");
require("koneksi.php");

include("guard/guard_4.php")
?>
<body>

<?php
session_start();
if($_SESSION['status']!=4)
 header("Location: index.php");

include("sidebar/sidebar_dataplg_inputer.php"); ?>
    <div class="main-panel">
        <nav class="navbar navbar-default">
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
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title"><center><b>Data Pelanggan</b></center></h2>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">

                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                            </div>
                            <div class="content table-responsive table-full-width">
                                <?php include("inputer_tabel.php"); ?>

				<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include("footer.php"); ?>
</body>
