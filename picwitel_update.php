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
 $no_sc = $_POST['no_sc'];
 $id_spv = $_POST['id_spv'];
 $status_validasi = $_POST['status_validasi'];
 $kategori_progress_psb = $_POST['kategori_progress_psb'];
 $keterangan_progress_psb = $_POST['keterangan_progress_psb'];
 $alamat_rill_pelanggan = $_POST['alamat_rill_pelanggan'];
 $cp_rill_pelanggan = $_POST['cp_rill_pelanggan'];
 $nama_teknisi = $_POST['nama_teknisi'];

 $cekKTP = "SELECT * FROM data_pelanggan WHERE ktp='$ktp'";
 $runCekKtp = mysqli_query($con, $cekKTP);
 $jumlahCekKtp = mysqli_num_rows($runCekKtp);

 $compare = "SELECT `track_id` , `ktp` FROM data_pelanggan WHERE ktp = '$ktp'";
 $hasil = mysqli_query($con,$compare);
 $data = mysqli_fetch_array($hasil);


	if ($data != null && $track_id == $data['track_id']){
		$query = "UPDATE data_pelanggan SET track_id = '$track_id', nama_pelanggan = '$nama_pelanggan', alamat = '$alamat', ktp = '$ktp', sto = '$sto', second_cp = '$second_cp', paket = '$paket', tagging_rill = '$tagging_rill', odp = '$odp', odp_ke_pelanggan = '$odp_ke_pelanggan', id_agency='$id_agency',
            id_partner='$id_partner', no_sc = '$no_sc', id_spv='$id_spv', status_validasi = '$status_validasi', kategori_progress_psb='$kategori_progress_psb', keterangan_progress_psb='$keterangan_progress_psb', alamat_rill_pelanggan = '$alamat_rill_pelanggan', cp_rill_pelanggan = '$cp_rill_pelanggan', nama_teknisi='$nama_teknisi'
    WHERE track_id = '$track_id'";


		$hasilQuery = mysqli_query($con, $query);

		if ($hasilQuery) {
			echo '<script language="JavaScript">
			alert("Update Data Berhasil!");
			window.location = "picwitel_tampil.php";
			</script>';
		} else {
			echo '<script language="JavaScript">
		alert("Update Data Gagal!");
		window.location = "picwitel_tampil.php";
		</script>';
		}


	 } else if ($jumlahCekKtp > 0) {
		echo '<script language="JavaScript">
		alert("Update Data Gagal!:\nData sudah ada");
		window.location = "picwitel_tampil.php";
			</script>';
	 } else {
		$query = "UPDATE data_pelanggan SET track_id = '$track_id', nama_pelanggan = '$nama_pelanggan', alamat = '$alamat', ktp = '$ktp', sto = '$sto', second_cp = '$second_cp', paket = '$paket', tagging_rill = '$tagging_rill', odp = '$odp', odp_ke_pelanggan = '$odp_ke_pelanggan', id_agency='$id_agency',
            id_partner='$id_partner', no_sc = '$no_sc', id_spv='$id_spv', status_validasi = '$status_validasi', kategori_progress_psb='$kategori_progress_psb', keterangan_progress_psb='$keterangan_progress_psb', alamat_rill_pelanggan = '$alamat_rill_pelanggan', cp_rill_pelanggan = '$cp_rill_pelanggan', nama_teknisi='$nama_teknisi'
    WHERE track_id = '$track_id'";

		$hasilQuery = mysqli_query($con, $query);
		if ($hasilQuery) echo '<script language="JavaScript">
		alert("Update Data Berhasil!");
		window.location = "picwitel_tampil.php";
		</script>';
	 }

   $con->close();
   }


else{ ?>
<script language="JavaScript">
alert("Pilih Pelanggan Terlebih Dahulu");
</script>
<?php
include("picwitel_tampil.php");
}
?>