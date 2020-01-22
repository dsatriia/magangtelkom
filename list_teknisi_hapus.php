<?php
if(isset($_GET['id_teknisi'])){
require("koneksi.php");
 $id_teknisi = $_GET['id_teknisi'];
 $query = "DELETE FROM teknisi WHERE id_teknisi = '$id_teknisi'";
 $hasilQuery = mysqli_query($con, $query);
 if ($hasilQuery){
  echo '<script language="JavaScript">
  alert("User Berhasil Dihapus!");
  </script>';
  include("list_teknisi_tampil.php");
 }
 else{
  echo '<script language="JavaScript">
  alert("User Tidak Berhasil Dihapus!");
  </script>';
  echo $con->error;
  include("list_teknisi_tampil.php");
 }
$con->close();

}
else{ ?>
 <script language="JavaScript">
 alert("Pilih User Terlebih Dahulu");
 </script>
<?php
include("list_teknisi_tampil.php");
}
