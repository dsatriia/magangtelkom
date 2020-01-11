<?php include("header.php"); ?>
<body>
<?php
include("guard/guard_1.php");
?>
<?php include("sidebar/sidebar_barang.php"); ?>
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
                                <p class="title" style="font-size:18pt; text-align:center"><b>INPUT DATA BARU</b></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <main>
	<div class="container">
		<div>
			
            <form method="post" action="barang_simpan.php">
                <div class="col-md-4">
                        <div class="form-group">
                            <label>Track ID</label>
                            <input type="text" class="form-control border-input" name="nama_barang" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <select name="jenis_barang" class="form-control border-input" required>
			      <option value="">-Jenis Barang-</option>
                              <option value="Laptop">Laptop</option>
                              <option value="Smartphone">Smartphone</option>
                              <option value="Camera">Camera</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control border-input" name="harga" min="1" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Barang</label>
                            <input type="number" class="form-control border-input" name="persediaan" min="1" autocomplete="off" required>
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