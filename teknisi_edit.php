<?php
include("guard/guard_5.php");
include("header.php");
require("koneksi.php");
?>
<body>
<?php
include("sidebar/sidebar_dataplg_teknisi.php");
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
$nama_teknisi = $data['nama_teknisi'];
$tagging_rill = $data['tagging_rill'];
$alamat_rill_pelanggan = $data['alamat_rill_pelanggan'];
$cp_rill_pelanggan = $data['cp_rill_pelanggan'];
$kategori_progress_psb = $data['kategori_progress_psb'];
$keterangan_progress_psb = $data['keterangan_progress_psb'];

?>

                             <form method='post' action='teknisi_update.php'
                             onsubmit='return confirm("Apakah data sudah benar?");'>
                             <div class='col-md-4'>
                            <div class='form-group'>
                                <label>Track Id</label>
                                <input type='text' class='form-control border-input' name='track_id' value='<?php echo $track_id ?>'  readonly>
                            </div>
                            <div class='form-group'>
                                <label>Nama Teknisi</label>
                                <input type='text' class='form-control border-input' name='nama_teknisi' value='<?php echo $nama_teknisi ?>'  readonly>
                            </div>
                            <div class='form-group'>
                                <label>Tagging Rill</label>
                                <input type='text' class='form-control border-input' name='tagging_rill' value='<?php echo $tagging_rill ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>Alamat Rill Pelanggan</label>
                                <input type='text' class='form-control border-input' name='alamat_rill_pelanggan' value='<?php echo $alamat_rill_pelanggan ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>CP Rill Pelanggan</label>
                                <input type='text' class='form-control border-input' name='cp_rill_pelanggan' value='<?php echo $cp_rill_pelanggan ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>Kategori PSB</label>
                                <input type='text' class='form-control border-input' name='kategori_progress_psb' value='<?php echo $kategori_progress_psb ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>Keterangan PSB</label>
                                <input type='text' class='form-control border-input' name='keterangan_progress_psb' value='<?php echo $keterangan_progress_psb ?>'  autocomplete="off" required>
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
include("teknisi_tampil.php");
}
?>
