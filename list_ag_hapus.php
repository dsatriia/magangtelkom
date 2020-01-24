<?php
if(isset($_GET['id_agency'])){
require("koneksi.php");
 $id_agency = $_GET['id_agency'];
 $query = "DELETE FROM agency WHERE id_agency = '$id_agency'";
 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery){

  echo '<script language="JavaScript">
  alert("User Berhasil Dihapus!");
  window.location = "list_ag_tampil.php";
  </script>';
 }

 else{
  echo '<script language="JavaScript">
  alert("User Tidak Berhasil Dihapus!");
  window.location = "list_ag_tampil.php";
  </script>';
 }

$con->close();

}
else{ ?>
 <script language="JavaScript">
 alert("Pilih User Terlebih Dahulu");
 </script>
<?php
include("list_ag_tampil.php");
}
?>
