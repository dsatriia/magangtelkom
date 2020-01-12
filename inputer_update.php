<?php
if(isset($_POST['btn-update'])){
require("koneksi.php");
//  $id = $_POST['id'];
$track_id = $_POST['track_id'];
 $select = mysqli_query($con, "SELECT *FROM data_pelanggan WHERE track_id='$track_id'");


 $array = mysqli_fetch_array($select);

 $no_sc = $POST['no_sc'];
 $status_validasi = $POST['status_validasi'];

 // $cekKTP = "SELECT * FROM data_pelanggan WHERE ktp='$ktp'";
 // $runCekKtp = mysqli_query($con, $cekKTP);
 // $jumlahCekKtp = mysqli_num_rows($runCekKtp);
 //
 // $compare = "SELECT `track_id` , `ktp` FROM data_pelanggan WHERE ktp = '$ktp'";
 // $hasil = mysqli_query($con,$compare);
 //
 // $data = mysqli_fetch_array($hasil);


	if ($track_id == $data['track_id']){
		$query = "UPDATE data_pelanggan SET track_id = '$track_id', no_sc = '$no_sc', status_validasi = '$status_validasi'
    WHERE track_id = '$track_id'";


		$hasilQuery = mysqli_query($con, $query);

		if ($hasilQuery) echo '<script language="JavaScript">
		alert("Update data berhasil");
		window.location = "inputer_tampil.php";
		</script>';


	 }
   // else if ($jumlahCekKtp > 0) {
		// echo '<script language="JavaScript">
		// alert("Update data gagal:\nData sudah ada");
		// window.location = "ag_tampil.php";
		// 	</script>';
	 // }
   // else {
		// $query = "UPDATE data_pelanggan SET track_id = '$track_id', nama_pelanggan = '$nama_pelanggan', alamat = '$alamat', ktp = '$ktp', sto = '$sto', second_cp = '$second_cp', paket = '$paket', tagging_rill = '$tagging_rill', odp = '$odp', odp_ke_pelanggan = '$odp_ke_pelanggan', agency='$agency',
   //          id_partner='$id_partner', spv='$spv'
		// WHERE track_id = '$track_id'";
   //
		// $hasilQuery = mysqli_query($con, $query);
		// if ($hasilQuery) echo '<script language="JavaScript">
		// alert("Update data berhasil");
		// window.location = "ag_tampil.php";
		// </script>';
	 // }









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
include("inputer_tampil.php");
}
?>
