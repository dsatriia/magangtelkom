<?php
if(isset($_POST['btn-update'])){
	require("koneksi.php");
	//  $id = $_POST['id'];
	$track_id = $_POST['track_id'];
	$select = mysqli_query($con, "SELECT *FROM data_pelanggan WHERE track_id='$track_id'");


	$array = mysqli_fetch_array($select);

	$no_sc = $_POST['no_sc'];
	$status_validasi = $_POST['status_validasi'];

	

	$query = "UPDATE data_pelanggan SET track_id = '$track_id', no_sc = '$no_sc', status_validasi = '$status_validasi'
	WHERE track_id = '$track_id'";

	// echo $query;die;
	$hasilQuery = mysqli_query($con, $query);

	if ($hasilQuery) {
		echo '<script language="JavaScript">
	alert("Update data berhasil!");
	window.location = "inputer_tampil.php";
	</script>';
	} else {
		echo '<script language="JavaScript">
	alert("Update data gagal!");
	window.location = "inputer_tampil.php";
	</script>';
	}





	$con->close();
}


else{ ?>
 <script language="JavaScript">
 alert("Pilih pelanggan terlebih dahulu");
 </script>
<?php
include("inputer_tampil.php");
}
?>
