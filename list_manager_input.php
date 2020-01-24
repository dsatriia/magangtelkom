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

            <form method="post" action="list_manager_simpan.php">
                <div class="col-md-4">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control border-input" name="nama" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control border-input" name="username" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control border-input" name="password" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control border-input" name="email" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Telpon</label>
                            <input type="text" class="form-control border-input" name="telpon" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>HP</label>
                            <input type="text" class="form-control border-input" name="hp" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>STO</label>
                            <input type="text" class="form-control border-input" name="id_sto" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Agency</label>
                            <input type="text" class="form-control border-input" name="id_agency" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Regional</label>
                            <input type="text" class="form-control border-input" name="regional" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Witel</label>
                            <input type="text" class="form-control border-input" name="witel" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Datel</label>
                            <input type="text" class="form-control border-input" name="datel" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Aktif</label>
                            <input type="text" class="form-control border-input" name="tanggal_aktif" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control border-input" name="akses" autocomplete="off" required>
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
