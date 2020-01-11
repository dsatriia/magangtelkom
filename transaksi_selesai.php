<?php include("header.php");
require("koneksi.php"); ?>

<body>
<?php

if(isset($_POST['btn-bayar'])){
$id=$_GET['id_transaksi'];
$totalbiaya=$_GET['total_biaya'];
$dibayar=$_POST['dibayar'];
$kembalian=($dibayar-$totalbiaya);

if($kembalian<0){ ?>
 <script language="JavaScript">
 alert("Maaf uang anda tidak cukup");
 </script>
 <?php include("transaksi_checkout.php");
}

else {
 $select=mysqli_query($con, "SELECT * FROM transaksi_temp WHERE id_transaksi='$id'");
 while($data=mysqli_fetch_array($select)){
  $barang=mysqli_fetch_row(mysqli_query($con, "SELECT persediaan FROM data_barang WHERE id_barang='$data[id_barang]'"));
    $newjumlah=$barang[0]-$data['jumlah'];
    $update=mysqli_query($con, "UPDATE data_barang SET persediaan='$newjumlah' WHERE id_barang='$data[id_barang]'");
 }
 $insert=mysqli_query($con, "INSERT INTO transaksi (id_transaksi, total_biaya, total_bayar, kembalian) VALUES
 ('$id', '$totalbiaya', '$dibayar', '$kembalian')");

 if(!$insert){ ?>
  <script language="JavaScript">
  alert("Penyimpanan ke database gagal");
  </script>
 <?php include("transaksi.php");
 }

 else { ?>
  <script language="JavaScript">
  var msg="<?php echo $kembalian ?>";
  alert("Pembayaran berhasil");
  alert("Kembalian anda : US$ "+msg+"\nTerima kasih telah berbelanja disini");
  </script>
<?php include("transaksi.php");
 }

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
</body>