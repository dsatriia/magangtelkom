<?php include("header.php");
require("koneksi.php"); ?>
<body>

<?php
include("sidebar/sidebar_dataplg_inputer.php");
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
$no_sc = $data['no_sc'];
$status_validasi = $data['status_validasi'];


?>
		<form method='post' action='inputer_update.php'>
                           <div class='col-md-4'>
                           <input type="hidden" value="<?= $data['track_id'] ?>" name="track_id">
                            <div class='form-group'>
                                <label>No SC</label>
                                <input type='text' class='form-control border-input' name='no_sc' value='<?php echo $no_sc ?>'  autocomplete="off" required>
                            </div>
                            <div class='form-group'>
                                <label>status_validasi</label>
                                <input type='text' class='form-control border-input' name='status_validasi' value='<?php echo $status_validasi ?>'  autocomplete="off" required>
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
include("inputer_tampil.php");
}
?>
