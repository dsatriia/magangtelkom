<?php
require("koneksi.php");
include("header.php");
?>
<body>
<?php
include("guard/guard_4.php");
$id = $_SESSION['id'];
?>
<?php include("sidebar/sidebar_dataplg_inputer.php"); ?>
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" style="font-size:18pt">Data Pelanggan</a>
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
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">

                    <div class="col-md-12">
                        <div class="card card-plain">
                            <!-- <div class="header">
                                <p class="title" style="font-size:18pt; text-align:center"><b>Input Data Baru</b></p>
                            </div> -->
                            <div class="content table-responsive table-full-width">
                                <main>
	<div class="container">
		<div>

            <form method="post" action="inputer_simpan.php">
                <div class="col-md-4">
                        <div class="form-group">
                            <label>No SC</label>
                            <input type="number" class="form-control border-input" name="no_sc" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Status Validasi</label>
                            <input type="text" class="form-control border-input" name="status_validasi" autocomplete="off" required>
                        </div>
                <div>
                <button type="submit" class="btn btn-info" name='btn-save'>Simpan</button>
                </div>
            </form>
		</div>
	</div>
</main>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
<?php include("footer.php"); ?>
