<?php
if(isset($_GET['id_kasto'])){
require("koneksi.php");
 $id_kasto = $_GET['id_kasto'];
 $query = "DELETE FROM kasto WHERE id_kasto = '$id_kasto'";
 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery){

  echo '<script language="JavaScript">
  alert("User Berhasil Dihapus!");
  window.location = "list_kasto_tampil.php";
  </script>';
 }

 else{
  echo '<script language="JavaScript">
  alert("User Tidak Berhasil Dihapus!");
  window.location = "list_kasto_tampil.php";
  </script>';
 }

$con->close();

}
else{ ?>
 <script language="JavaScript">
 alert("Pilih User Terlebih Dahulu");
 </script>
<?php
include("list_kasto_tampil.php");
}
?>
