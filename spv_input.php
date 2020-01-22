<?php
require("koneksi.php");
include("header.php"); ?>
<body>
<?php
include("guard/guard_2.php");
$id_spv = $_SESSION['id'];


//mencari data id_admingency dari spv yg sedang login
$queryCariAg = "SELECT * FROM `supervisor` WHERE `id_supervisor` = $id_spv";

$runQueryCariAg = mysqli_query($con,$queryCariAg);

$dataSpv = mysqli_fetch_assoc($runQueryCariAg);
$id_ag = $dataSpv["id_agency"];
// end

//option untuk menampilkan partner yang dibawahinya
$queryPartner = "SELECT salesforce.id_salesforce as id_salesforce, salesforce.nama as nama FROM `salesforce` INNER JOIN `supervisor` ON salesforce.id_supervisor = supervisor.id_supervisor WHERE supervisor.id_supervisor = $id_spv";
$runQueryPartner = mysqli_query($con,$queryPartner);

while ($dataPartner = mysqli_fetch_assoc($runQueryPartner)) {
    $kumpulanDataPartner[] = $dataPartner;
}
// end



?>
<?php include("sidebar/sidebar_dataplg_spv.php"); ?>
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

            <form method="post" action="spv_simpan.php">
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
                            <input type="hidden" value="<?=$id_ag?>" class="form-control border-input" name="id_agency" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="<?=$id_spv?>" class="form-control border-input" name="id_spv" autocomplete="off" required>
                        </div>
                            <div class="form-group">
                            <label>Partner</label>
                            <select class="form-control border-input" name="id_partner" autocomplete="off" required>
                            <?php foreach($kumpulanDataPartner as $partner) : ?>
                                <option value="<?=$partner['id_salesforce'] ?> "><?= $partner['nama'] ?></option>
                            <?php endforeach ?>
                            </select>
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
