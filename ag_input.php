<?php
require("koneksi.php");
include("header.php"); ?>
<script src="assets/js/jquery.min.js"></script>
       <script src="assets/js/ie-emulation-modes-warning.js"></script>
<body>
<?php
include("guard/guard_1.php");
$id = $_SESSION['id'];

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

//option untuk menampilkan spv yang dibawahinya
$querySpv = "SELECT * FROM `supervisor` WHERE `id_admin_agency` = $id";
$runQuerySpv = mysqli_query($con,$querySpv);

while ($dataSpv = mysqli_fetch_assoc($runQuerySpv)) {
    $kumpulanDataSpv[] = $dataSpv;
}
// end

//option untuk menampilkan partner yang dibawahinya
$queryPartner = "SELECT salesforce.id_salesforce as id_salesforce, salesforce.nama as nama FROM `salesforce` INNER JOIN `supervisor` ON salesforce.id_supervisor = supervisor.id_supervisor WHERE supervisor.id_admin_agency = $id";
$runQueryPartner = mysqli_query($con,$queryPartner);

while ($dataPartner = mysqli_fetch_assoc($runQueryPartner)) {
    $kumpulanDataPartner[] = $dataPartner;
}
// end

?>
<?php include("sidebar/sidebar_dataplg_ag.php"); ?>

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
                            <select class="form-control border-input" name="id_sto" autocomplete="off" required>
                              <option value="">Pilih STO</option>
                            <?php foreach($kumpulanDataSto as $id_sto) : ?>
                                <option value="<?=$id_sto['id_sto'] ?> "><?= $id_sto['area'] ?></option>
                            <?php endforeach ?>
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
                            <?php foreach($kumpulanDataPaket as $id_paket) : ?>
                                <option value="<?=$id_paket['id_paket'] ?> "><?= $id_paket['nama_paket'] ?></option>
                            <?php endforeach ?>
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
                            <input type="hidden" value="<?=$id?>" class="form-control border-input" name="id_agency" autocomplete="off" required>
                        </div>
                      <div class="form-group">
                          <input type="hidden" value="<?=$id?>" class="form-control border-input" name="id_admin_agency" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label>Supervisor</label>
                          <select class="form-control border-input" id="id_supervisor" name="id_supervisor" autocomplete="off" required>
                              <option value="">Pilih Supervisor</option>
                              <?php
                                  // $query = mysqli_query($con, "SELECT supervisor.id_admin_agency, supervisor.nama, id_supervisor FROM `supervisor` INNER JOIN `admin_agency` ON supervisor.id_admin_agency = admin_agency.id_admin_agency ORDER BY supervisor.nama");
                                  // while ($row = mysqli_fetch_array($query)) {

                                  $query = mysqli_query($con, "SELECT * FROM `supervisor` WHERE `id_admin_agency`=$id");
                                  while ($row = mysqli_fetch_array($query)) {
                                  ?>

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
