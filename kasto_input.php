<?php
require("koneksi.php");
include("header.php"); ?>
<body>
<?php
include("guard/guard_10.php");
$id = $_SESSION['id'];


//option untuk menampilkan seluruh agency
$queryAgency = "SELECT id_agency, nama FROM `agency`";
$runQueryAgency = mysqli_query($con,$queryAgency);
$kumpulanDataAgency = [];
while ($dataAgency = mysqli_fetch_assoc($runQueryAgency)) {
    $kumpulanDataAgency[] = $dataAgency;
}

// end

//option untuk menampilkan spv yang dibawahinya
$querySpv = "SELECT id_supervisor, nama FROM `supervisor`";
$runQuerySpv = mysqli_query($con,$querySpv);

while ($dataSpv = mysqli_fetch_assoc($runQuerySpv)) {
    $kumpulanDataSpv[] = $dataSpv;
}
// end

//option untuk menampilkan partner yang dibawahinya
$queryPartner = "SELECT id_salesforce, nama FROM `salesforce`";
$runQueryPartner = mysqli_query($con,$queryPartner);

while ($dataPartner = mysqli_fetch_assoc($runQueryPartner)) {
    $kumpulanDataPartner[] = $dataPartner;
}
// end



?>
<?php include("sidebar/sidebar_dataplg_kasto.php"); ?>
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

            <form method="post" action="kasto_simpan.php">
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
                        <div class='form-group'>
                            <label>Agency</label>
                                <select class="form-control border-input" name="id_agency" autocomplete="off" required>
                                <?php foreach($kumpulanDataAgency as $agency) : ?>
                                    <option value="<?=$agency['id_agency'] ?> "><?= $agency['nama'] ?></option>
                                <?php endforeach ?>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Partner</label>
                            <select class="form-control border-input" name="id_partner" autocomplete="off" required>
                            <?php foreach($kumpulanDataPartner as $partner) : ?>
                                <option value="<?=$partner['id_salesforce'] ?> "><?= $partner['nama'] ?></option>
                            <?php endforeach ?>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label>No SC</label>
                            <input type='text' class='form-control border-input' name='no_sc' autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Supervisor</label>
                            <select class="form-control border-input" name="id_spv" autocomplete="off" required>
                            <?php foreach($kumpulanDataSpv as $spv) : ?>
                                <option value="<?=$spv['id_supervisor'] ?> "><?= $spv['nama'] ?></option>
                            <?php endforeach ?>
                            </select>
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
        <?php include("footer.php"); ?>