<?php
require("koneksi.php");
include("header.php"); ?>
 <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/ie-emulation-modes-warning.js"></script>
<body>
<?php
include("guard/guard_9.php");
$id = $_SESSION['id'];



?>
<?php include("sidebar/sidebar_dataplg_picwitel.php"); ?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                          <h2 class="title text-center"><b>Input Data Baru</b></h2>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                            <table class="table table-hover">

                            <main>
<div class="container">
<div>

            <form method="post" action="picwitel_simpan.php">
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
                            <label>Second CP</label>
                            <input type="text" class="form-control border-input" name="second_cp" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Paket</label>
                            <select class="form-control border-input" name="id_paket" autocomplete="off" required>
                                <option value="">Pilih Paket</option>
                                <?php
                                    $query = mysqli_query($con, "SELECT * FROM paket");
                                    while ($row = mysqli_fetch_array($query)) { ?>

                                    <option id="id_paket"  value="<?php echo $row['id_paket']; ?>">
                                        <?php echo $row['nama_paket']; ?>
                                    </option>

                                <?php } ?>
                            </select>
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
                        <div class='form-group'>
                            <label>Agency</label>
                            <select class="form-control border-input" id="id_agency" name="id_agency" autocomplete="off" required>
                                <option value="">Pilih Agency</option>
                                <?php
                                    $query = mysqli_query($con, "SELECT *    FROM `agency` ORDER BY nama_agency");
                                    while ($row = mysqli_fetch_array($query)) { ?>

                                    <option value="<?php echo $row['id_agency']; ?>">
                                        <?php echo $row['nama_agency']; ?>
                                    </option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label>Admin Agency</label>
                                <select class="form-control border-input" id="id_admin_agency" name="id_admin_agency" autocomplete="off" required>
                                                <option value="">Pilih Admin Agency</option>
                                                <?php
                                                    $query = mysqli_query($con, "SELECT * FROM `admin_agency` INNER JOIN `agency` ON admin_agency.id_agency = agency.id_agency ORDER BY nama");
                                                    while ($row = mysqli_fetch_array($query)) { ?>

                                                    <option id="id_admin_agency" class="<?php echo $row['id_agency']; ?>" value="<?php echo $row['id_admin_agency']; ?>">
                                                        <?php echo $row['nama']; ?>
                                                    </option>

                                                <?php } ?>
                                            </select>
                        </div>
                        <div class="form-group">
                            <label>Supervisor</label>
                            <select class="form-control border-input" id="id_supervisor" name="id_supervisor" autocomplete="off" required>
                                <option value="">Pilih Supervisor</option>
                                <?php
                                    $query = mysqli_query($con, "SELECT supervisor.id_admin_agency, supervisor.nama, id_supervisor FROM `supervisor` INNER JOIN `admin_agency` ON supervisor.id_admin_agency = admin_agency.id_admin_agency ORDER BY supervisor.nama");
                                    while ($row = mysqli_fetch_array($query)) { ?>

                                    <option id="id_supervisor" class="<?php echo $row['id_admin_agency']; ?>" value="<?php echo $row['id_supervisor']; ?>">
                                        <?php echo $row['nama']; ?>
                                    </option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Partner</label>
                            <select id="id_salesforce" class="form-control border-input" name="id_salesforce" autocomplete="off" required>
                                <option value="">Pilih Partner</option>
                                <?php
                                    $query = mysqli_query($con, "SELECT supervisor.id_supervisor, salesforce.nama, id_salesforce FROM `salesforce` INNER JOIN `supervisor` ON salesforce.id_supervisor = supervisor.id_supervisor ORDER BY salesforce.nama");
                                    while ($row = mysqli_fetch_array($query)) { ?>

                                    <option id="id_salesforce" class="<?php echo $row['id_supervisor']; ?>" value="<?php echo $row['id_salesforce']; ?>">
                                        <?php echo $row['nama']; ?>
                                    </option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label>No SC</label>
                            <input type='text' class='form-control border-input' name='no_sc' autocomplete="off" required>
                        </div>
                        <div class='form-group'>
                            <label>Status Validasi</label>
                            <input type='text' class='form-control border-input'
                                name='status_validasi'
                                autocomplete="off" required>
                        </div>
                        <div class='form-group'>
                            <label>Kategori Progress PSB</label>
                            <input type='text' class='form-control border-input'
                                name='kategori_progress_psb'
                                autocomplete="off" required>
                        </div>
                        <div class='form-group'>
                            <label>Keterangan Progress PSB</label>
                            <input type='text' class='form-control border-input'
                                name='keterangan_progress_psb'
                                autocomplete="off" required>
                        </div>
                        <div class='form-group'>
                            <label>Alamat Rill Pelanggan</label>
                            <input type='text' class='form-control border-input'
                                name='alamat_rill_pelanggan'
                                autocomplete="off" required>
                        </div>
                        <div class='form-group'>
                            <label>CP Rill Pelanggan</label>
                            <input type='text' class='form-control border-input'
                                name='cp_rill_pelanggan'
                                autocomplete="off" required>
                        </div>
                        <div class='form-group'>
                            <label>Nama Teknisi</label>
                            <input type='text' class='form-control border-input'
                                name='nama_teknisi'
                                autocomplete="off" required>
                        </div>

                <div>
                  <br>
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
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-chained.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script>
            $(document).ready(function() {
                $("#id_admin_agency").chained("#id_agency");
                $("#id_supervisor").chained("#id_admin_agency");
                $("#id_salesforce").chained("#id_supervisor");

            });
        </script>
        <?php include("footer.php"); ?>
