<?php
if(isset($_GET['id_barang'])){
require("koneksi.php");
 $id_barang = $_GET['id_barang'];
 $query = "DELETE FROM data_barang WHERE id_barang = '$id_barang'";
 $hasilQuery = mysqli_query($con, $query);
 if ($hasilQuery){
  echo '<script language="JavaScript">
  alert("Data telah berhasil dihapus");
  </script>';
  include("barang_tampil.php");
 }
 else{
  echo '<script language="JavaScript">
  alert("Data tidak berhasil dihapus");
  </script>';
  echo $con->error;
  include("barang_tampil.php");
 }
$con->close();

}
else{ ?>
 <script language="JavaScript">
 alert("Pilih item terlebih dahulu");
 </script>
<?php
include("barang_tampil.php");
}
