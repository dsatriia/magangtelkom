<?php
if(isset($_GET['id_woc'])){
require("koneksi.php");
 $id_woc = $_GET['id_woc'];
 $query = "DELETE FROM woc WHERE id_woc = '$id_woc'";
 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery){

  echo '<script language="JavaScript">
  alert("User Berhasil Dihapus!");
  window.location = "list_woc_tampil.php";
  </script>';
 }

 else{
  echo '<script language="JavaScript">
  alert("User Tidak Berhasil Dihapus!");
  window.location = "list_woc_tampil.php";
  </script>';
 }

$con->close();

}
else{ ?>
 <script language="JavaScript">
 alert("Pilih User Terlebih Dahulu");
 </script>
<?php
include("list_woc_tampil.php");
}
?>
