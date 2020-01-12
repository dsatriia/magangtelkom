<?php include("header.php");
require("koneksi.php");
include("guard/guard_4.php");
?>
<body>

  <?php
  include("sidebar/sidebar_dashboard_inputer.php");
  ?>

    <div class="main-panel">
	<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" style="font-size:18pt">Dashboard</a>
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
                                <h2 class="title"><center><b>Selamat Datang di Telkom Witel Sidoarjo</b></center></h2>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">

                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                            </div>
				<br>
				<p class="category" style="font-size:12pt; text-align:center">Akses: <?php echo $_SESSION['username'] ?></a>
                            <div class="content table-responsive table-full-width">
<?php
echo "</body>";
include("footer.php"); ?>
