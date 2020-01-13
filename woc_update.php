<?php
if(isset($_POST['btn-update'])){
require("koneksi.php");
//  $id = $_POST['id'];
$track_id = $_POST['track_id'];
 $select = mysqli_query($con, "SELECT *FROM data_pelanggan WHERE track_id='$track_id'");


 $array = mysqli_fetch_array($select);

//  $nama_pelanggan = $_POST['nama_pelanggan'];
//  $alamat = $_POST['alamat'];
 $ktp = 'ktp';
//  $sto = $_POST['sto'];
//  $second_cp = $_POST['second_cp'];
//  $paket = $_POST['paket'];
//  $tagging_rill = $_POST['tagging_rill'];
//  $odp = $_POST['odp'];
//  $odp_ke_pelanggan = $_POST['odp_ke_pelanggan'];
// // $tgl_input = $_POST['tgl_input'];
//  $agency = $_POST['agency'];
//  $id_partner = $_POST['id_partner'];
//  $spv = $_POST['spv'];

 $tagging_rill = $_POST['tagging_rill'];
 $alamat_rill_pelanggan = $_POST['alamat_rill_pelanggan'];
 $cp_rill_pelanggan = $_POST['cp_rill_pelanggan'];
 $kategori_progress_psb = $_POST['kategori_progress_psb'];
 $keterangan_progress_psb = $_POST['keterangan_progress_psb'];
 $nama_teknisi = $_POST['nama_teknisi'];

 // $jenis_barang = $_POST['jenis_barang'];
 // $harga = $_POST['harga'];
 // $persediaan = $_POST['persediaan'];

//  $compare = mysqli_query($con, "SELECT * FROM data_barang WHERE nama_barang='$nama_barang' AND jenis_barang='$jenis_barang'");
//  $data = mysqli_fetch_array($compare);
//  if($nama_barang==$data['nama_barang'] && $jenis_barang==$data['jenis_barang'] && $nama_barang!=$array['nama_barang'] && $jenis_barang!=$array['jenis_barang']){
// 	echo '<script language="JavaScript">
// 	alert("Update data gagal:\nData sudah ada");
// 		</script>';
// 	include("barang_tampil.php");
//  }

// $compare = mysqli_query($con, "SELECT * FROM data_pelanggan WHERE track_id='$track_id' AND ktp='$ktp'");
//  $data = mysqli_fetch_array($compare);

 $cekKTP = "SELECT * FROM data_pelanggan WHERE ktp='$ktp'";
 $runCekKtp = mysqli_query($con, $cekKTP);
 $jumlahCekKtp = mysqli_num_rows($runCekKtp);

 $compare = "SELECT `track_id` , `ktp` FROM data_pelanggan WHERE ktp = '$ktp'";
 $hasil = mysqli_query($con,$compare);

 $data = mysqli_fetch_array($hasil);


//	if ($track_id == $data['track_id']){
		$query = "UPDATE data_pelanggan SET track_id = '$track_id', tagging_rill = '$tagging_rill', alamat_rill_pelanggan = '$alamat_rill_pelanggan', cp_rill_pelanggan = '$cp_rill_pelanggan', kategori_progress_psb='$kategori_progress_psb',
            keterangan_progress_psb='$keterangan_progress_psb', nama_teknisi='$nama_teknisi' WHERE track_id = '$track_id'";


		$hasilQuery = mysqli_query($con, $query);

		if ($hasilQuery) echo '<script language="JavaScript">
		alert("Update data berhasil");
		window.location = "woc_tampil.php";
		</script>';


	 //} 
	 else if ($jumlahCekKtp > 0) {
		echo '<script language="JavaScript">
		alert("Update data gagal:\nData sudah ada");
		window.location = "woc_tampil.php";
			</script>';
	 } else {
		$query = "UPDATE data_pelanggan SET track_id = '$track_id', tagging_rill = '$tagging_rill', alamat_rill_pelanggan = '$alamat_rill_pelanggan', cp_rill_pelanggan = '$cp_rill_pelanggan', kategori_progress_psb='$kategori_progress_psb',
		keterangan_progress_psb='$keterangan_progress_psb', nama_teknisi='$nama_teknisi'
		WHERE track_id = '$track_id'";

		$hasilQuery = mysqli_query($con, $query);
		if ($hasilQuery) echo '<script language="JavaScript">
		alert("Update data berhasil");
		window.location = "woc_tampil.php";
		</script>';
	 }









// if($jumlahCekKtp = 0){
// 	// if($ktp != $data['ktp']){

// 		$query = "UPDATE data_pelanggan SET track_id = '$track_id', nama_pelanggan = '$nama_pelanggan', alamat = '$alamat', ktp = '$ktp', sto = '$sto', second_cp = '$second_cp', paket = '$paket', tagging_rill = '$tagging_rill', odp = '$odp', odp_ke_pelanggan = '$odp_ke_pelanggan', agency='$agency', id_partner='$id_partner', spv='$spv'
// 				WHERE id = '$id'";

// 		$hasilQuery = mysqli_query($con, $query);
// 	   if ($hasilQuery) echo '<script language="JavaScript">
// 		   alert("Update data berhasil");
// 		   </script>';
// 	   include("barang_tampil.php");

// 	// } else {
// 	// 	$query = "UPDATE data_pelanggan SET track_id = '$track_id', nama_pelanggan = '$nama_pelanggan', ktp = '$ktp', alamat = '$alamat', sto = '$sto', second_cp = '$second_cp', paket = '$paket', tagging_rill = '$tagging_rill', odp = '$odp', odp_ke_pelanggan = '$odp_ke_pelanggan', agency='$agency', id_partner='$id_partner', spv='$spv'
// 	// 			WHERE id = '$id'";

// 	// 	$hasilQuery = mysqli_query($con, $query);
// 	//    if ($hasilQuery) echo '<script language="JavaScript">
// 	// 	   alert("Update data berhasil");
// 	// 	   </script>';
// 	//    include("barang_tampil.php");
// 	// }
// } else {
// 	echo '<script language="JavaScript">
// 	alert("Update data gagal:\nData sudah ada");
// 		</script>';
// 	include("barang_tampil.php");
// }

// $query = "UPDATE data_pelanggan SET track_id = '$track_id', nama_pelanggan = '$nama_pelanggan', ktp = '$ktp', alamat = '$alamat', sto = '$sto', second_cp = '$second_cp', paket = '$paket', tagging_rill = '$tagging_rill', odp = '$odp', odp_ke_pelanggan = '$odp_ke_pelanggan', agency='$agency', id_partner='$id_partner', spv='$spv'
// WHERE id = '$id'";
// $hasilQuery = mysqli_query($con, $query);
// if ($hasilQuery) echo '<script language="JavaScript">
// alert("Update data berhasil");
// </script>';
// include("barang_tampil.php");



//  else{
//  $query = "UPDATE data_barang SET nama_barang = '$nama_barang', jenis_barang = '$jenis_barang', harga = '$harga', persediaan = '$persediaan'
//  			WHERE id_barang = '$id_barang'";
//  $hasilQuery = mysqli_query($con, $query);
// 	if ($hasilQuery) echo '<script language="JavaScript">
// 		alert("Update data berhasil");
// 		</script>';
// 	include("barang_tampil.php");
//  }
// $con->close();
// }


   $con->close();
   }


else{ ?>
 <script language="JavaScript">
 alert("Pilih pelanggan terlebih dahulu");
 </script>
<?php
include("woc_tampil.php");
}
?>
