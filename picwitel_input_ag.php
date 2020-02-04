<?php
require("koneksi.php");
include("header.php");
?>
<body>
<?php
//option untuk menampilkan seluruh akses
$queryAkses = "SELECT * FROM `jabatan`";
$runQueryAkses = mysqli_query($con,$queryAkses);
$kumpulanDataAkses = [];
while ($dataAkses = mysqli_fetch_assoc($runQueryAkses)) {
    $kumpulanDataAkses[] = $dataAkses;
}
// end

//option untuk menampilkan seluruh sto
$querySto = "SELECT id_sto, area FROM `sto`";
$runQuerySto = mysqli_query($con,$querySto);
$kumpulanDataSto = [];
while ($dataSto = mysqli_fetch_assoc($runQuerySto)) {
    $kumpulanDataSto[] = $dataSto;
}
// end
?>

<?php include("sidebar/sidebar_list_picwitel.php"); ?>

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

            <form method="post" action="picwitel_simpan_ag.php">
                <div class="col-md-4">
                        <div class="form-group">
                            <label>Kode ID</label>
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
                        <div class="form-group">
                            <label>Agency</label>
                            <select class="form-control border-input" name="id_agency" autocomplete="off" required>
                                <option value="">Pilih Agency</option>
                                <?php
                                    $query = mysqli_query($con, "SELECT * FROM agency");
                                    while ($row = mysqli_fetch_array($query)) { ?>

                                    <option id="id_agency"  value="<?php echo $row['id_agency']; ?>">
                                        <?php echo $row['nama_agency']; ?>
                                    </option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>STO</label>
                            <select class="form-control border-input" name="id_sto" autocomplete="off" required>
                                <option value="">Pilih STO</option>
                                <?php
                                    $query = mysqli_query($con, "SELECT * FROM sto");
                                    while ($row = mysqli_fetch_array($query)) { ?>

                                    <option id="id_sto"  value="<?php echo $row['id_sto']; ?>">
                                        <?php echo $row['area']; ?>
                                    </option>

                                <?php } ?>
                            </select>
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
                            <label>Hp</label>
                            <input type="text" class="form-control border-input" name="hp" autocomplete="off" required>
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
