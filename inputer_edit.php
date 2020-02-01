<?php
include("guard/guard_4.php");
include("header.php");
require("koneksi.php");
?>
<body>
<?php
include("sidebar/sidebar_dataplg_inputer.php");
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
$no_sc = $data['no_sc'];
$status_validasi = $data['status_validasi'];
?>
		<form method='post' action='inputer_update.php'
    onsubmit='return confirm("Apakah data sudah benar?");'>
    <div class='col-md-4'>
        <div class='form-group'>
          <div class='form-group'>
              <label>Track Id</label>
              <input type='text' class='form-control border-input' value='<?php echo $track_id ?>' disabled>
              <input type='text' class='form-control border-input' name='track_id' value='<?php echo $track_id ?>' style="display:none">
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
				  <br>
          <button type="submit" class="btn btn-info" name='btn-update'>Simpan</button>
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
