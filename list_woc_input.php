<?php
require("koneksi.php");
include("header.php");
?>
<body>

<?php include("sidebar/sidebar_list_user.php"); ?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                          <h2 class="title text-center"><b>Tambah User Baru</b></h2>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                            <table class="table table-hover">

                            <main>
<div class="container">
<div>

            <form method="post" action="list_woc_simpan.php">
                <div class="col-md-4">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control border-input" name="username" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control border-input" name="password" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control border-input" name="nama" autocomplete="off" required>
                        </div>


                <div>
                <button type="submit" class="btn btn-info" name="btn-save">Simpan</button>
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
