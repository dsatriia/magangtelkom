<?php include("header.php"); ?>
<body>
<?php
include("guard/guard_1.php");
?>
<?php include("sidebar/sidebar_dataplg_ag.php"); ?>
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
                            <div class="header">
                                <p class="title" style="font-size:18pt; text-align:center"><b>Input Data Baru</b></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <main>
	<div class="container">
		<div>

            <form method="post" action="ag_simpan.php">
                <div class="col-md-4">
                        <div class="form-group">
                            <label>Track ID</label>
                            <input type="text" class="form-control border-input" name="track_id" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <input type="text" class="form-control border-input" name="nama_pelanggan" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control border-input" name="alamat" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>No KTP</label>
                            <input type="number" class="form-control border-input" name="ktp" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>STO</label>
                            <input type="text" class="form-control border-input" name="sto" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Second CP</label>
                            <input type="text" class="form-control border-input" name="second_cp" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Paket</label>
                            <input type="text" class="form-control border-input" name="paket" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Tagging Rill</label>
                            <input type="text" class="form-control border-input" name="tagging_rill" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>ODP</label>
                            <input type="text" class="form-control border-input" name="odp" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Jarak ODP ke Pelanggan</label>
                            <input type="text" class="form-control border-input" name="odp_ke_pelanggan" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Agency</label>
                            <input type="text" class="form-control border-input" name="agency" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>ID Parter</label>
                            <input type="text" class="form-control border-input" name="id_partner" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>SPV</label>
                            <input type="text" class="form-control border-input" name="spv" autocomplete="off" required>
                        </div>
                <div>
                <button type="submit" name='btn-save'>Simpan</button>
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
