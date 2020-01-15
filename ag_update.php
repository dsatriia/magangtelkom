<?php
if(isset($_POST['btn-update'])){
require("koneksi.php");

$track_id = $_POST['track_id'];
 $select = mysqli_query($con, "SELECT *FROM data_pelanggan WHERE track_id='$track_id'");


 $array = mysqli_fetch_array($select);

 $nama_pelanggan = $_POST['nama_pelanggan'];
 $alamat = $_POST['alamat'];
 $ktp = $_POST['ktp'];
 $sto = $_POST['sto'];
 $second_cp = $_POST['second_cp'];
 $paket = $_POST['paket'];
 $tagging_rill = $_POST['tagging_rill'];
 $odp = $_POST['odp'];
 $odp_ke_pelanggan = $_POST['odp_ke_pelanggan'];

 $id_agency = $_POST['id_agency'];
 $id_partner = $_POST['id_partner'];
 $id_spv = $_POST['id_spv'];

 $cekKTP = "SELECT * FROM data_pelanggan WHERE ktp='$ktp'";
 $runCekKtp = mysqli_query($con, $cekKTP);
 $jumlahCekKtp = mysqli_num_rows($runCekKtp);

 $compare = "SELECT `track_id` , `ktp` FROM data_pelanggan WHERE ktp = '$ktp'";
 $hasil = mysqli_query($con,$compare);
 $data = mysqli_fetch_array($hasil);


	if ($data != null && $track_id == $data['track_id']){
		$query = "UPDATE data_pelanggan SET track_id = '$track_id', nama_pelanggan = '$nama_pelanggan', alamat = '$alamat', ktp = '$ktp', sto = '$sto', second_cp = '$second_cp', paket = '$paket', tagging_rill = '$tagging_rill', odp = '$odp', odp_ke_pelanggan = '$odp_ke_pelanggan', id_agency='$id_agency',
            id_partner='$id_partner', id_spv='$id_spv'
    WHERE track_id = '$track_id'";


		$hasilQuery = mysqli_query($con, $query);

		if ($hasilQuery) {
			echo '<script language="JavaScript">
			alert("Update Data Berhasil!");
			window.location = "ag_tampil.php";
			</script>';
		} else {
			echo '<script language="JavaScript">
		alert("Update Data Gagal!");
		window.location = "ag_tampil.php";
		</script>';
		}


	 } else if ($jumlahCekKtp > 0) {
		echo '<script language="JavaScript">
		alert("Update Data Dagal!:\nData Sudah Ada");
		window.location = "ag_tampil.php";
			</script>';
	 } else {
		$query = "UPDATE data_pelanggan SET track_id = '$track_id', nama_pelanggan = '$nama_pelanggan', alamat = '$alamat', ktp = '$ktp', sto = '$sto', second_cp = '$second_cp', paket = '$paket', tagging_rill = '$tagging_rill', odp = '$odp', odp_ke_pelanggan = '$odp_ke_pelanggan', id_agency='$id_agency',
            id_partner='$id_partner', id_spv='$id_spv'
		WHERE track_id = '$track_id'";

		$hasilQuery = mysqli_query($con, $query);
		if ($hasilQuery) echo '<script language="JavaScript">
		alert("Update Data Berhasil!");
		window.location = "ag_tampil.php";
		</script>';
	 }

   $con->close();
   }


else{ ?>
<script language="JavaScript">
alert("Pilih Pelanggan Terlebih Dahulu!");
</script>
<?php
include("ag_tampil.php");
}
?>
