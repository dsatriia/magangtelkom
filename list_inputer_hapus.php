<?php
if(isset($_GET['id_inputer'])){
require("koneksi.php");
 $id_inputer = $_GET['id_inputer'];
 $query = "DELETE FROM inputer WHERE id_inputer = '$id_inputer'";
 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery){

  echo '<script language="JavaScript">
  alert("User Berhasil Dihapus!");
  window.location = "list_inputer_tampil.php";
  </script>';
 }

 else{
  echo '<script language="JavaScript">
  alert("User Tidak Berhasil Dihapus!");
  window.location = "list_inputer_tampil.php";
  </script>';
 }

$con->close();

}
else{ ?>
 <script language="JavaScript">
 alert("Pilih User Terlebih Dahulu");
 </script>
<?php
include("list_inputer_tampil.php");
}
?>
