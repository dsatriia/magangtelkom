<?php
if(isset($_GET['id_salesforce'])){
require("koneksi.php");
 $id_salesforce = $_GET['id_salesforce'];
 $query = "DELETE FROM salesforce WHERE id_salesforce = '$id_salesforce'";
 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery){

  echo '<script language="JavaScript">
  alert("User Berhasil Dihapus!");
  window.location = "list_sf_tampil.php";
  </script>';
 }

 else{
  echo '<script language="JavaScript">
  alert("User Tidak Berhasil Dihapus!");
  window.location = "list_sf_tampil.php";
  </script>';
 }

$con->close();

}
else{ ?>
 <script language="JavaScript">
 alert("Pilih User Terlebih Dahulu");
 </script>
<?php
include("list_sf_tampil.php");
}
?>
