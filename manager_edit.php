<?php
include("guard/guard_8.php");
include("header.php");
require("koneksi.php");


?>
 <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/ie-emulation-modes-warning.js"></script>
<body>
<?php
include("sidebar/sidebar_dataplg_manager.php");
if(isset($_GET['id'])){
?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                          <h2 class="title text-center"><b>Edit Data</b></h2>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                            <table class="table table-hover">

<tbody>

<?php
require("koneksi.php");
$id = $_GET['id'];
$query = "SELECT * FROM data_pelanggan WHERE id = '$id'";
$hasil = mysqli_query($con,$query);
$data  = mysqli_fetch_array($hasil);

$track_id = $data['track_id'];
$nama_pelanggan = $data['nama_pelanggan'];
$alamat = $data['alamat'];
$ktp = $data['ktp'];
$id_sto = $data['id_sto'];
$second_cp = $data['second_cp'];
$id_paket = $data['id_paket'];
$tagging_rill = $data['tagging_rill'];
$odp = $data['odp'];
$odp_ke_pelanggan = $data['odp_ke_pelanggan'];
$id_agency = $data['id_agency'];
$id_admin_agency = $data['id_admin_agency'];
$id_supervisor = $data['id_supervisor'];
$id_salesforce = $data['id_salesforce'];
$no_sc = $data['no_sc'];
$status_validasi = $data['status_validasi'];
$kategori_progress_psb = $data['kategori_progress_psb'];
$keterangan_progress_psb = $data['keterangan_progress_psb'];
$alamat_rill_pelanggan = $data['alamat_rill_pelanggan'];
$cp_rill_pelanggan = $data['cp_rill_pelanggan'];
$nama_teknisi = $data['nama_teknisi'];


?>

<form method='post' action='manager_update.php'
    onsubmit='return confirm("Apakah Data Sudah Benar?");'>
    <div class='col-md-4'>
        <div class='form-group'>
            <label>Track Id</label>
            <input type='text' class='form-control border-input'
                value='<?php echo $track_id ?>' disabled>
            <input type='text' class='form-control border-input'
                name='track_id' value='<?php echo $track_id ?>'
                style="display:none">
        </div>
        <div class='form-group'>
            <label>Nama Pelanggan</label>
            <input type='text' class='form-control border-input'
                name='nama_pelanggan'
                value='<?php echo $nama_pelanggan ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Alamat</label>
            <input type='text' class='form-control border-input'
                name='alamat' value='<?php echo $alamat ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>No KTP</label>
            <input type='text' class='form-control border-input'
                name='ktp' value='<?php echo $ktp ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>STO</label>
            <select class="form-control border-input" name="id_sto" autocomplete="off" required>
                <option value="">Please Select</option>
                <?php
                    $query = mysqli_query($con, "SELECT * FROM sto");
                    while ($row = mysqli_fetch_array($query)) { ?>

                    <option id="id_sto"  value="<?php echo $row['id_sto'];?>" <?php if($id_sto == $row['id_sto']): echo 'selected'; endif ?>>
                        <?php echo $row['area']; ?>
                    </option>

                <?php } ?>
            </select>
        </div>
        <div class='form-group'>
            <label>Second CP</label>
            <input type='text' class='form-control border-input'
                name='second_cp'
                value='<?php echo $second_cp ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Paket</label>
            <select class="form-control border-input" name="id_paket" autocomplete="off" required>
                <option value="">Please Select</option>
                <?php
                    $query = mysqli_query($con, "SELECT * FROM paket");
                    while ($row = mysqli_fetch_array($query)) { ?>

                    <option id="id_paket"  value="<?php echo $row['id_paket'];?>" <?php if($id_paket == $row['id_paket']): echo 'selected'; endif ?>>
                        <?php echo $row['nama_paket']; ?>
                    </option>

                <?php } ?>
            </select>
        </div>
        <div class='form-group'>
            <label>Tagging Rill</label>
            <input type='text' class='form-control border-input'
                name='tagging_rill'
                value='<?php echo $tagging_rill ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>ODP</label>
            <input type='text' class='form-control border-input'
                name='odp' value='<?php echo $odp ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Jarak ODP ke Pelanggan</label>
            <input type='text' class='form-control border-input'
                name='odp_ke_pelanggan'
                value='<?php echo $odp_ke_pelanggan ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Agency</label>
                <select class="form-control border-input" id="id_agency" name="id_agency" autocomplete="off" required>
                    <option value="">Please Select</option>
                    <?php
                        $query = mysqli_query($con, "SELECT * FROM `agency` ORDER BY nama_agency");
                        while ($row = mysqli_fetch_array($query)) { ?>

                        <option value="<?php echo $row['id_agency']; ?>" <?php if($id_agency == $row['id_agency']): echo 'selected'; endif ?>>
                            <?php echo $row['nama_agency']; ?>
                        </option>

                    <?php } ?>
                </select>
        </div>
        <div class='form-group'>
            <label>Admin Agency</label>
                <select class="form-control border-input" id="id_admin_agency" name="id_admin_agency" autocomplete="off" required>
                    <option value="">Please Select</option>
                    <?php
                        $query = mysqli_query($con, "SELECT * FROM `admin_agency` INNER JOIN `agency` ON admin_agency.id_agency = agency.id_agency ORDER BY nama");
                        while ($row = mysqli_fetch_array($query)) { ?>

                        <option id="id_admin_agency" class="<?php echo $row['id_agency']; ?>" value="<?php echo $row['id_admin_agency']; ?>" <?php if($id_admin_agency == $row['id_admin_agency']): echo 'selected'; endif ?>>
                            <?php echo $row['nama']; ?>
                        </option>

                    <?php } ?>
                </select>
        </div>
        <div class="form-group">
            <label>Supervisor</label>
            <select class="form-control border-input" id="id_supervisor" name="id_supervisor" autocomplete="off" required>
                <option value="">Please Select</option>
                <?php
                    $query = mysqli_query($con, "SELECT supervisor.id_admin_agency, supervisor.nama, id_supervisor FROM `supervisor` INNER JOIN `admin_agency` ON supervisor.id_admin_agency = admin_agency.id_admin_agency ORDER BY supervisor.nama");
                    while ($row = mysqli_fetch_array($query)) { ?>

                    <option id="id_supervisor" class="<?php echo $row['id_admin_agency']; ?>" value="<?php echo $row['id_supervisor']; ?>"  <?php if($id_supervisor == $row['id_supervisor']): echo 'selected'; endif ?>>
                        <?php echo $row['nama']; ?>
                    </option>

                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Partner</label>
            <select id="id_salesforce" class="form-control border-input" name="id_salesforce" autocomplete="off" required>
                <option value="">Please Select</option>
                <?php
                    $query = mysqli_query($con, "SELECT supervisor.id_supervisor, salesforce.nama, id_salesforce FROM `salesforce` INNER JOIN `supervisor` ON salesforce.id_supervisor = supervisor.id_supervisor ORDER BY salesforce.nama");
                    while ($row = mysqli_fetch_array($query)) { ?>

                    <option id="id_salesforce" class="<?php echo $row['id_supervisor']; ?>" value="<?php echo $row['id_salesforce']; ?>" <?php if($id_salesforce == $row['id_salesforce']): echo 'selected'; endif ?>>
                        <?php echo $row['nama']; ?>
                    </option>

                <?php } ?>
            </select>
        </div>
        <div class='form-group'>
            <label>No SC</label>
            <input type='text' class='form-control border-input'
                name='no_sc' value='<?php echo $no_sc ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Status Validasi</label>
            <input type='text' class='form-control border-input'
                name='status_validasi' value='<?php echo $status_validasi ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Kategori Progress PSB</label>
            <input type='text' class='form-control border-input'
                name='kategori_progress_psb' value='<?php echo $kategori_progress_psb ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Keterangan Progress PSB</label>
            <input type='text' class='form-control border-input'
                name='keterangan_progress_psb' value='<?php echo $keterangan_progress_psb ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Alamat Rill Pelanggan</label>
            <input type='text' class='form-control border-input'
                name='alamat_rill_pelanggan' value='<?php echo $alamat_rill_pelanggan ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>CP Rill Pelanggan</label>
            <input type='text' class='form-control border-input'
                name='cp_rill_pelanggan' value='<?php echo $cp_rill_pelanggan ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Nama Teknisi</label>
            <input type='text' class='form-control border-input'
                name='nama_teknisi' value='<?php echo $nama_teknisi ?>'
                autocomplete="off" required>
        </div>

        <br>
        <button type="submit" class="btn btn-info"
            name='btn-update'>Simpan</button>
    </div>
</form>

</tbody>
</table>

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
<?php
include("footer.php");
}
else{ ?>
<script language="JavaScript">
alert("Pilih Item Terlebih Dahulu!");
</script>
<?php
include("manager_tampil.php");
}
?>
