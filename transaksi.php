<html>
<?php include("header.php");
require("koneksi.php"); ?>
<body>
<?php 
session_start();
if($_SESSION['status']!="kasir")
 header("Location: index.php");
include("sidebar/sidebar_transaksi.php"); ?>

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
                                <h2 class="title"><center><b>Pembayaran</b></center></h2>
				<p class="category" style="font-size:15pt">Silahkan masukkan kode barang.</p>
                            </div>
<main>
	<div class="container">
		<div>
			<form method="post" action="transaksi.php">
				    <div class="col-md-4">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" class="form-control border-input" name="id_barang" autocomplete="off" required>
                        </div>
                    <div>
                        <button type="submit">Search</button>
				    </div>
                    </div>
			</form>

	<?php if(isset($_POST['id_barang']) && trim($_POST['id_barang'])!= ""){
	$kode=$_POST['id_barang'];
   	$query="SELECT * FROM data_barang WHERE id_barang='$kode'";         
    	$hasil=mysqli_query($con,$query); 
	if(mysqli_num_rows($hasil)>0) { ?>
		<table class="table table-hover">
    <thead>
            <th>Name Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th colspan="2">Action</th>
    </thead>
<tbody>
<?php
 while ($data = mysqli_fetch_array($hasil)){              
  echo "<tr>"; ?>
  <td><?php echo $data['nama_barang'] ?></td>
  <td><?php echo "US$ ".$data['harga'] ?></td>
  <form method="POST" action="transaksi_keranjang.php?id_barang=<?php echo $kode ?>">
  <td><input type="number" name="qty" min="1" max="<?php echo $data['persediaan'] ?>" size="5" autocomplete="off" required></td>
  <td><input type="submit" name="btn-tambah" value="Tambahkan" onClick='return confirm("Yakin ingin menambahkan barang?");'></td>
  </form>
  <?php echo "</tr>";
 }
	}
	else{ ?>
	<script language="JavaScript">
	alert("Maaf barang tidak tersedia");
	</script>
	<?php }
  }  
?>         
</tbody>
</table>		</div>
		</div>

</main>
<br>
<br>
<center>
<form method="POST" action="transaksi_checkout.php">
<input type="submit" name="btn-checkout" value="Checkout" style = "width:7em; height:5em;" onClick='return confirm("Ingin melanjutkan ke checkout?");'>
</form></center>
<?php include("footer.php"); ?>
</body>
</html>