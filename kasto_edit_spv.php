<?php
include("guard/guard_10.php");
include("header.php");
require("koneksi.php");
?>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<body>
<?php
include("sidebar/sidebar_list_kasto.php");
if(isset($_GET['id_supervisor'])){
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
$id = $_GET['id_supervisor'];
$query = "SELECT * FROM supervisor WHERE id_supervisor = '$id'";
$hasil = mysqli_query($con,$query);
$data  = mysqli_fetch_array($hasil);

// if ($dataAg) {
//    $queryListAg = "SELECT * FROM user WHERE id = '$id'";
//    $hasilQueryListAg = mysqli_query($con, $queryListAg);
//    $data = $data  = mysqli_fetch_array($hasilQueryListAg);


$username = $data['username'];
$password = $data['password'];
$akses = 2;
$id_sto = $data['id_sto'];
$nama = $data['nama'];
$email = $data['email'];
$telpon = $data['telpon'];
$hp = $data['hp'];
$id_agency = $data['id_agency'];
$id_admin_agency = $data['id_admin_agency'];
$regional = $data['regional'];
$witel = $data['witel'];
$datel = $data['datel'];

?>

<form method='post' action='kasto_update_spv.php'
    onsubmit='return confirm("Apakah Data Sudah Benar?");'>
    <div class='col-md-4'>
        <div class='form-group'>
            <label>Kode ID</label>
            <input type='text' class='form-control border-input'
                value='<?php echo $username ?>' disabled>
            <input type='text' class='form-control border-input'
                name='username' value='<?php echo $username ?>'
                style="display:none">
        </div>
        <div class='form-group'>
            <label>Password</label>
            <input type='text' class='form-control border-input'
                name='password'
                value='<?php echo $password ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Nama</label>
            <input type='text' class='form-control border-input'
                name='nama' value='<?php echo $nama ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Agency</label>
                <select class="form-control border-input" id="id_agency" name="id_agency" autocomplete="off" required>
                    <!-- <option value="">Please Select</option> -->
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
                    <!-- <option value="">Please Select</option> -->
                    <?php
                        $query = mysqli_query($con, "SELECT * FROM `admin_agency` INNER JOIN `agency` ON admin_agency.id_agency = agency.id_agency ORDER BY nama");
                        while ($row = mysqli_fetch_array($query)) { ?>

                        <option id="id_admin_agency" class="<?php echo $row['id_agency']; ?>" value="<?php echo $row['id_admin_agency']; ?>" <?php if($id_admin_agency == $row['id_admin_agency']): echo 'selected'; endif ?>>
                            <?php echo $row['nama']; ?>
                        </option>

                    <?php } ?>
                </select>
        </div>
        <div class='form-group'>
            <label>STO</label>
            <select class="form-control border-input" name="id_sto" autocomplete="off" required>
                <!-- <option value="">Please Select</option> -->
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
            <label>Email</label>
            <input type='text' class='form-control border-input'
                name='email' value='<?php echo $email ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Telpon</label>
            <input type='text' class='form-control border-input'
                name='telpon'
                value='<?php echo $telpon ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>HP</label>
            <input type='text' class='form-control border-input'
                name='hp'
                value='<?php echo $hp ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Regional</label>
            <input type='text' class='form-control border-input'
                name='regional' value='<?php echo $regional ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Witel</label>
            <input type='text' class='form-control border-input'
                name='witel'
                value='<?php echo $witel ?>'
                autocomplete="off" required>
        </div>
        <div class='form-group'>
            <label>Datel</label>
            <input type='text' class='form-control border-input'
                name='datel' value='<?php echo $datel ?>'
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
include("kasto_tampil_spv.php");
}
?>
