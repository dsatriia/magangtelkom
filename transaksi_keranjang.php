<?php
require("koneksi.php");

if(isset($_POST['btn-tambah'])){
$no=1;
$queryno=mysqli_query($con, "SELECT id_transaksi FROM transaksi");
while($nomor=mysqli_fetch_array($queryno)){
	if($nomor['id_transaksi']==$no)
	$no++;
}

 $jumlah=$_POST['qty'];
 $kode=$_GET['id_barang'];
 $select=mysqli_query($con, "SELECT * FROM data_barang WHERE id_barang='$kode'");
 $barang=mysqli_fetch_array($select);
 $cek=mysqli_query($con, "SELECT * FROM transaksi_temp WHERE id_transaksi='$no' AND id_barang='$kode'");

if(mysqli_num_rows($cek)==0){
 $totalharga=$jumlah*$barang['harga'];
 $insert=mysqli_query($con, "INSERT INTO transaksi_temp (id_transaksi, id_barang, jumlah, total_harga) VALUES ('$no', '$kode', '$jumlah', '$totalharga')");
 
 if($insert){ ?>
 <script language="JavaScript">
 alert("Berhasil ditambahkan ke keranjang");
 </script>
 <?php }

 else { ?>
 <script language="JavaScript">
 alert("Gagal ditambahkan");
 </script>
 <?php echo $con->error;}

 include("transaksi.php");
}

else{
 $update=mysqli_fetch_array($cek);
 $totaljumlah=$jumlah+$update['jumlah'];

 if($totaljumlah>$barang['persediaan']){ ?>
 <script language="JavaScript">
 alert("Maaf jumlah yang ingin dibeli melebihi stock");
 </script>
<?php }

 else{
 $totalharga=$totaljumlah*$update['total_harga'];
 $qupdate=mysqli_query($con, "UPDATE transaksi_temp SET jumlah='$totaljumlah', total_harga='$totalharga' WHERE id_transaksi='$no'AND id_barang='$kode'");

 if($qupdate){ ?>
 <script language="JavaScript">
 alert("Berhasil ditambahkan ke keranjang");
 </script>
 <?php }

 else { ?>
 <script language="JavaScript">
 alert("Gagal ditambahkan");
 </script>
 <?php }

 }

 include("transaksi.php");
}
$con->close();
}
else { ?>
 <script language="JavaScript">
 alert("Belilah sesuatu terlebih dahulu");
 </script>
<?php include("transaksi.php");
}
?>
