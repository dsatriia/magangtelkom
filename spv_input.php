<?php
require("koneksi.php");
include("header.php"); ?>

<body>
<?php
include("guard/guard_2.php");
$id = $_SESSION['id'];


$query = "SELECT * FROM supervisor WHERE id_supervisor = '$id'";
$hasil = mysqli_query($con,$query);
$data  = mysqli_fetch_array($hasil);
$id_admin_agency = $data['id_admin_agency'];


$query2 = "SELECT * FROM admin_agency WHERE id_admin_agency = '$id_admin_agency'";
$hasil2 = mysqli_query($con,$query2);
$data2  = mysqli_fetch_array($hasil2);
$id_agency = $data2['id_agency'];



// //mencari data id_admingency dari spv yg sedang login
// $queryCariAg = "SELECT * FROM `supervisor` WHERE `id_supervisor` = $id_spv";
//
// $runQueryCariAg = mysqli_query($con,$queryCariAg);
//
// $dataSpv = mysqli_fetch_assoc($runQueryCariAg);
// $id_ag = $dataSpv["id_agency"];
// // end

//option untuk menampilkan seluruh sto
$querySto = "SELECT id_sto, area FROM `sto`";
$runQuerySto = mysqli_query($con,$querySto);
$kumpulanDataSto = [];
while ($dataSto = mysqli_fetch_assoc($runQuerySto)) {
    $kumpulanDataSto[] = $dataSto;
}
// end

//option untuk menampilkan seluruh paket
$queryPaket = "SELECT id_paket, nama_paket FROM `paket`";
$runQueryPaket = mysqli_query($con,$queryPaket);
$kumpulanDataPaket = [];
while ($dataPaket = mysqli_fetch_assoc($runQueryPaket)) {
    $kumpulanDataPaket[] = $dataPaket;
}
// end

//option untuk menampilkan seluruh agency
$queryAgency = "SELECT id_agency, nama_agency FROM `agency`";
$runQueryAgency = mysqli_query($con,$queryAgency);
$kumpulanDataAgency = [];
while ($dataAgency = mysqli_fetch_assoc($runQueryAgency)) {
    $kumpulanDataAgency[] = $dataAgency;
}
// end

//option untuk menampilkan partner yang dibawahinya
// $queryPartner = "SELECT salesforce.id_salesforce as id_salesforce, salesforce.nama as nama FROM `salesforce` INNER JOIN `supervisor` ON salesforce.id_supervisor = supervisor.id_supervisor WHERE supervisor.id_supervisor = $id_supervisor";

$queryPartner = "SELECT * FROM `salesforce` WHERE `id_supervisor` = $id";
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
                        <div class="form-group">
                            <input type="hidden" value="<?=$id_agency?>" class="form-control border-input" name="id_agency" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                          <input type="hidden" value="<?=$id_admin_agency?>" class="form-control border-input" name="id_admin_agency" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="<?=$id?>" class="form-control border-input" name="id_supervisor" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Partner</label>
                            <select class="form-control border-input" name="id_salesforce" autocomplete="off" required>
                              <option value="">Pilih Partner</option>
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
