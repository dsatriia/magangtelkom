<?php
include("guard/guard_8.php");
include("header.php");
require("koneksi.php");
?>
<body>
<?php
include("sidebar/sidebar_list_manager.php");
if(isset($_GET['id_picwitel'])){
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
$id = $_GET['id_picwitel'];
$query = "SELECT * FROM detail_picwitel WHERE id_picwitel = '$id'";
$hasil = mysqli_query($con,$query);
$data  = mysqli_fetch_array($hasil);

// if ($dataAg) {
//    $queryListAg = "SELECT * FROM user WHERE id = '$id'";
//    $hasilQueryListAg = mysqli_query($con, $queryListAg);
//    $data = $data  = mysqli_fetch_array($hasilQueryListAg);

$username = $data['username'];
$password = $data['password'];
$akses = 4;
$id_sto = $data['id_sto'];
$nama = $data['nama'];
$email = $data['email'];
$telpon = $data['telpon'];
$hp = $data['hp'];
$regional = $data['regional'];
$witel = $data['witel'];
$datel = $data['datel'];

?>

<form method='post' action='manager_update_detail_picwitel.php'
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
<?php
include("footer.php");
}
else{ ?>
<script language="JavaScript">
alert("Pilih Item Terlebih Dahulu!");
</script>
<?php
include("manager_tampil_detail_picwitel.php");
}
?>
