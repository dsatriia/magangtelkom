<?php include("header.php");
require("koneksi.php");
include("guard/guard_1.php");
?>

<body>

    <?php
  include("sidebar/sidebar_dashboard_ag.php");
  ?>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" style="font-size:18pt">Dashboard</a>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title">
                                    <center><b>Selamat Datang di Telkom Witel Sidoarjo</b></center>
                                </h2>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">

                                    <div class="col-md-12">
                                        <div class="card card-plain">                                            
                                            <br>
                                            <p class="category" style="font-size:12pt; text-align:center">
                                            Nama: <?php echo $_SESSION['nama'] ?>
                                            <br>
                                            Username: <?php echo $_SESSION['username'] ?>
                                                <div class="content table-responsive table-full-width">
                                                
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include("footer.php"); ?>