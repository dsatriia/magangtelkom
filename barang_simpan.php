<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
 $nama_barang = $_POST['nama_barang'];
 $jenis_barang = $_POST['jenis_barang'];
 $harga = $_POST['harga'];
 $persediaan = $_POST['persediaan'];
 $select = mysqli_query($con, "SELECT * FROM data_barang WHERE nama_barang='$nama_barang' AND jenis_barang='$jenis_barang'");
 $data = mysqli_fetch_array($select);
 if($nama_barang==$data['nama_barang'] && $jenis_barang==$data['jenis_barang']){
	echo '<script language="JavaScript">
	alert("Penyimpanan gagal:\nData sudah ada");
		</script>';
	include("barang_input.php");
 }
 else{
  $query = "INSERT INTO data_barang (nama_barang, jenis_barang, harga, persediaan) VALUES ('$nama_barang', '$jenis_barang', '$harga', '$persediaan')";
  $hasilQuery = mysqli_query($con, $query); 
  if ($hasilQuery) {
	echo '<script language="JavaScript">
		alert("Penyimpanan berhasil");
		</script>';
	require("barang_tampil.php");
  }
 }
$con->close();
}
else{ ?>
 <script language="JavaScript">
 alert("Isilah form terlebih dahulu");
 </script>
<?php 
include("barang_input.php");
}
?>
