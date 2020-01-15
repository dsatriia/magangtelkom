<?php
include("guard/guard_1.php");
include("header.php");
require("koneksi.php");

$id = $_SESSION['id'];


//option untuk menampilkan spv yang dibawahinya
$querySpv = "SELECT * FROM `supervisor` WHERE `id_agency` = $id";
$runQuerySpv = mysqli_query($con,$querySpv);

while ($dataSpv = mysqli_fetch_assoc($runQuerySpv)) {
    $kumpulanDataSpv[] = $dataSpv;
}
// end

//option untuk menampilkan partner yang dibawahinya
$queryPartner = "SELECT salesforce.id_salesforce as id_salesforce, salesforce.nama as nama FROM `salesforce` INNER JOIN `supervisor` ON salesforce.id_supervisor = supervisor.id_supervisor WHERE supervisor.id_agency = $id";
$runQueryPartner = mysqli_query($con,$queryPartner);

while ($dataPartner = mysqli_fetch_assoc($runQueryPartner)) {
    $kumpulanDataPartner[] = $dataPartner;
}
// end


?>


<body>

    <?php
include("sidebar/sidebar_dataplg_ag.php");
if(isset($_GET['id'])){
?>
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
                                                <h2 class="title">
                                                    <center><b>Edit Data</b></center>
                                                </h2>
                                            </div>
                                            <div class="content table-responsive table-full-width">
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
$sto = $data['sto'];
$second_cp = $data['second_cp'];
$paket = $data['paket'];
$tagging_rill = $data['tagging_rill'];
$odp = $data['odp'];
$odp_ke_pelanggan = $data['odp_ke_pelanggan'];
$id_agency = $_SESSION['id'];
$id_partner = $data['id_partner'];
$id_spv = $data['id_spv'];

?>
                                                        <form method='post' action='ag_update.php'
                                                            onsubmit='return confirm("Apakah data sudah benar?");'>
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
                                                                    <input type='text' class='form-control border-input'
                                                                        name='sto' value='<?php echo $sto ?>'
                                                                        autocomplete="off" required>
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
                                                                    <input type='text' class='form-control border-input'
                                                                        name='paket' value='<?php echo $paket ?>'
                                                                        autocomplete="off" required>
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
                                                                    <input type='hidden'
                                                                        class='form-control border-input'
                                                                        name='id_agency'
                                                                        value='<?php echo $id_agency ?>'
                                                                        autocomplete="off" required>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Partner</label>
                                                                        <select class="form-control border-input" name="id_partner" autocomplete="off" required>
                                                                        <?php foreach($kumpulanDataPartner as $partner) : ?>
                                                                            <option value="<?=$partner['id_salesforce'] ?> " <?php if($id_partner == $partner['id_salesforce']): echo 'selected'; endif;?>><?= $partner['nama'] ?></option>
                                                                        <?php endforeach ?>
                                                                        </select>
                                                                </div>
                                                                <div class='form-group'>
                                                                    <label>Supervisor</label>
                                                                        <select class="form-control border-input" name="id_spv" autocomplete="off" required>
                                                                        <?php foreach($kumpulanDataSpv as $spv) : ?>
                                                                            <option value="<?=$spv['id_supervisor'] ?> " <?php if($id_spv == $spv['id_supervisor']): echo 'selected'; endif;?>><?= $spv['nama'] ?></option>
                                                                        <?php endforeach ?>
                                                                        </select>
                                                                </div>

                                                                <br>
                                                                <button type="submit" class="btn btn-success"
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
                    alert("Pilih item terlebih dahulu");
                    </script>
                    <?php
include("ag_tampil.php");
}
?>
