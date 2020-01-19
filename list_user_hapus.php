<?php
if(isset($_GET['id'])){
require("koneksi.php");
 $id = $_GET['id'];
 $query = "DELETE FROM user WHERE id = '$id'";
 $hasilQuery = mysqli_query($con, $query);
 if ($hasilQuery){
  echo '<script language="JavaScript">
  alert("User Berhasil Dihapus!");
  </script>';
  include("list_user_tampil.php");
 }
 else{
  echo '<script language="JavaScript">
  alert("User Tidak Berhasil Dihapus!");
  </script>';
  echo $con->error;
  include("list_user_tampil.php");
 }
$con->close();

}
else{ ?>
 <script language="JavaScript">
 alert("Pilih User Terlebih Dahulu");
 </script>
<?php
include("list_user_tampil.php");
}
