<?php
if(isset($_GET['id_tl'])){
require("koneksi.php");
 $id_tl = $_GET['id_tl'];
 $query = "DELETE FROM tl WHERE id_tl = '$id_tl'";
 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery){

  echo '<script language="JavaScript">
  alert("User Berhasil Dihapus!");
  window.location = "list_tl_tampil.php";
  </script>';
 }

 else{
  echo '<script language="JavaScript">
  alert("User Tidak Berhasil Dihapus!");
  window.location = "list_tl_tampil.php";
  </script>';
 }

$con->close();

}
else{ ?>
 <script language="JavaScript">
 alert("Pilih User Terlebih Dahulu");
 </script>
<?php
include("list_tl_tampil.php");
}
?>
