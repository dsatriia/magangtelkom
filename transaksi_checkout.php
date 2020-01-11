<?php include("header.php");
require("koneksi.php"); ?>

<body>
<?php

$no=1;
$totalbiaya=0;
$selectid=mysqli_query($con, "SELECT id_transaksi FROM transaksi");
while($num=mysqli_fetch_array($selectid)){
 if($num['id_transaksi']==$no)
  $no++;
}

$select=mysqli_query($con, "SELECT * FROM transaksi_temp WHERE id_transaksi='$no'");
if(mysqli_num_rows($select)==0){ ?>
 <script language="JavaScript">
 alert("Belilah sesuatu terlebih dahulu");
 </script>
<?php include("transaksi.php"); }

else { ?>
<?php include"sidebar/sidebar_transaksi.php";?>
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" style="font-size:18pt">Pembayaran</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title"><center><b>Checkout</b></center></h2>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
				<main>
					<div class="container">
						<div>
 <thead>
	<th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
 </thead>
 <?php while($data=mysqli_fetch_array($select)){
 $id=$data['id_barang'];
 $totalbiaya+=$data['total_harga'];
 $selectbarang=mysqli_query($con, "SELECT nama_barang FROM data_barang WHERE id_barang='$id'");
 $nama=mysqli_fetch_array($selectbarang);
 echo "<tr>"; ?>
	<td><?php echo $nama['nama_barang'] ?></td>
        <td><?php echo $data['jumlah'] ?></td>
	<td><?php echo "US$ ".$data['total_harga'] ?></td>
 <?php
 echo "</tr>";
 }
 echo "</table><br><center>"; ?>

 <form method="POST" action="transaksi_selesai.php?total_biaya=<?php echo $totalbiaya ?>&id_transaksi=<?php echo $no ?>">
 <table>
 <tr>
  <td><p class='header'>Total Biaya</p></td>
  <td><p class='header'>:</p></td>
  <td><p class='header'>US$ <?php echo $totalbiaya ?></p></td>
 </tr>
 <tr>
  <td><p class='header'>Dibayar</p></td>
  <td><p class='header'>:</p></td>
  <td><p class='header'><input type="number" name="dibayar" placeholder="US$ currency" autocomplete="off" required></p></td>
 </tr>
 <tr>
  <td><p class='header'><input type="submit" name="btn-bayar" value="Bayar"></p></td>
  <td></td>
 </tr>
 <?php echo "</table></form></center>";

?>
						</div>
					</div>
				</main>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php"); }?>