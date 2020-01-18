<?php 
include("guard/guard_2.php");
include("header.php");
require("koneksi.php");

$id_spv = $_SESSION['id'];
$id_pelanggan = $_GET['id'];

//mencari data id_admingency dari spv yg sedang login
$queryCariSpv = "SELECT * FROM `data_pelanggan` WHERE `id` = $id_pelanggan";
$runQueryCariSpv = mysqli_query($con,$queryCariSpv);

$dataSpv = mysqli_fetch_assoc($runQueryCariSpv);
$id_spv = $dataSpv["id_spv"];
// end


// //option untuk menampilkan spv yang dibawahinya
// $querySpv = "SELECT * FROM `supervisor` WHERE `id_agency` = $id_spv";
// $runQuerySpv = mysqli_query($con,$querySpv);

// while ($dataSpv = mysqli_fetch_assoc($runQuerySpv)) {
//     $kumpulanDataSpv[] = $dataSpv;
// }
// end

//option untuk menampilkan partner yang dibawahinya
$queryPartner = "SELECT * FROM salesforce WHERE id_supervisor= '$id_spv'";

$runQueryPartner = mysqli_query($con,$queryPartner);

while ($dataPartner = mysqli_fetch_assoc($runQueryPartner)) {
    $kumpulanDataPartner[] = $dataPartner;
}
// end


?>


<body>

    <?php
include("sidebar/sidebar_dataplg_spv.php");
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


$id_partner = $data['id_partner'];
$id_spv = $data['id_spv'];


//mencari data id_admingency dari spv yg sedang login
$queryCariAg = "SELECT * FROM `supervisor` WHERE `id_supervisor` = $id_spv";

$runQueryCariAg = mysqli_query($con,$queryCariAg);

$dataSpv = mysqli_fetch_assoc($runQueryCariAg);
$id_agency = $dataSpv["id_agency"];
// end

$id_supervisor = $data['id_spv'];
$query_supervisor = "SELECT nama FROM supervisor WHERE id_supervisor = $id_supervisor";
$run_supervisor = mysqli_query($con, $query_supervisor);
$hasil_supervisor = mysqli_fetch_array($run_supervisor);
$supervisor = $hasil_supervisor['nama'];


?>
                                                        <form method='post' action='spv_update.php'
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
                                                                    <label>ODP ke Pelanggan</label>
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
                                                                <!-- <div class='form-group'>
                                                                    <label>Supervisor</label>
                                                                    <input type='text' class='form-control border-input'
                                                                        value='<?php //echo $supervisor ?>' disabled>
                                                                    <input type='text' class='form-control border-input'
                                                                        name='nama' value='<?php //echo $supervisor ?>'
                                                                        style="display:none">
                                                                </div> -->
                                                                <div class='form-group'>
                                                                    <input type='hidden'
                                                                        class='form-control border-input'
                                                                        name='id_spv'
                                                                        value='<?php echo $id_spv ?>'
                                                                        autocomplete="off" required>
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
                    alert("Pilih pelanggan terlebih dahulu");
                    </script>
                    <?php
include("spv_tampil.php");
}
?>