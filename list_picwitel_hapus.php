<?php
if(isset($_GET['id_picwitel'])){
require("koneksi.php");
 $id_picwitel = $_GET['id_picwitel'];
 $query = "DELETE FROM picwitel WHERE id_picwitel = '$id_picwitel'";
 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery){

  echo '<script language="JavaScript">
  alert("User Berhasil Dihapus!");
  window.location = "list_picwitel_tampil.php";
  </script>';
 }

 else{
  echo '<script language="JavaScript">
  alert("User Tidak Berhasil Dihapus!");
  window.location = "list_picwitel_tampil.php";
  </script>';
 }

$con->close();

}
else{ ?>
 <script language="JavaScript">
 alert("Pilih User Terlebih Dahulu");
 </script>
<?php
include("list_picwitel_tampil.php");
}
?>
