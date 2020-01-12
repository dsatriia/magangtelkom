<?php include("header.php");
require("koneksi.php"); ?>
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
                                <h2 class="title"><center><b>Edit Data</b></center></h2>
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
$agency = $data['agency'];
$id_partner = $data['id_partner'];
$spv = $data['spv'];

?>
		<form method='post' action='barang_update.php'>
                           <div class='col-md-4'>
                            <div class='form-group'>
                                <label>Track Id</label>
                                <input type='number' class='form-control border-input' name='track_id' value='<?php echo $track_id ?>'  readonly>
                            </div>
		              	        <div class='form-group'>
                                <label>Nama Pelanggan</label>
                                <input type='text' class='form-control border-input' name='nama_pelanggan' value='<?php echo $nama_pelanggan ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>Alamat</label>
                                <input type='text' class='form-control border-input' name='alamat' value='<?php echo $alamat ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>No KTP</label>
                                <input type='text' class='form-control border-input' name='ktp' value='<?php echo $ktp ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>STO</label>
                                <input type='text' class='form-control border-input' name='sto' value='<?php echo $sto ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>Second CP</label>
                                <input type='text' class='form-control border-input' name='second_cp' value='<?php echo $second_cp ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>Paket</label>
                                <input type='text' class='form-control border-input' name='paket' value='<?php echo $paket ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>Tagging Rill</label>
                                <input type='text' class='form-control border-input' name='tagging_rill' value='<?php echo $tagging_rill ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>ODP</label>
                                <input type='text' class='form-control border-input' name='odp' value='<?php echo $odp ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>ODP ke Pelanggan</label>
                                <input type='text' class='form-control border-input' name='odp_ke_pelanggan' value='<?php echo $odp_ke_pelanggan ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>Agency</label>
                                <input type='text' class='form-control border-input' name='agency' value='<?php echo $agency ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>Id Partner</label>
                                <input type='text' class='form-control border-input' name='id_partner' value='<?php echo $id_partner ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>SPV</label>
                                <input type='text' class='form-control border-input' name='spv' value='<?php echo $spv ?>'  autocomplete="off" required>
                            </div>


				<br>
                            <button type='submit' onClick='confirm("Apakah data sudah benar?");' name='btn-update'>Simpan</button>
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
include("barang_tampil.php");
}
?>
