<?php
if(isset($_POST['btn-update'])){
	require("koneksi.php");
	//  $id = $_POST['id'];
	$track_id = $_POST['track_id'];
	$select = mysqli_query($con, "SELECT *FROM data_pelanggan WHERE track_id='$track_id'");


	$array = mysqli_fetch_array($select);

  $tagging_rill = $_POST['tagging_rill'];
  $alamat_rill_pelanggan = $_POST['alamat_rill_pelanggan'];
  $cp_rill_pelanggan = $_POST['cp_rill_pelanggan'];
  $kategori_progress_psb = $_POST['kategori_progress_psb'];
  $keterangan_progress_psb = $_POST['keterangan_progress_psb'];



	$query = "UPDATE data_pelanggan SET track_id = '$track_id', tagging_rill = '$tagging_rill', alamat_rill_pelanggan = '$alamat_rill_pelanggan', cp_rill_pelanggan = '$cp_rill_pelanggan', kategori_progress_psb='$kategori_progress_psb',
          keterangan_progress_psb='$keterangan_progress_psb' WHERE track_id = '$track_id'";

	// echo $query;die;
	$hasilQuery = mysqli_query($con, $query);

	if ($hasilQuery) {
		echo '<script language="JavaScript">
	alert("Update data berhasil!");
	window.location = "teknisi_tampil.php";
	</script>';
	} else {
		echo '<script language="JavaScript">
	alert("Update data gagal!");
	window.location = "teknisi_tampil.php";
	</script>';
	}





	$con->close();
}


else{ ?>
 <script language="JavaScript">
 alert("Pilih pelanggan terlebih dahulu");
 </script>
<?php
include("teknisi_tampil.php");
}
?>
