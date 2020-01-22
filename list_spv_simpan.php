<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$id_agency = $_POST['id_agency'];

$query = "SELECT * FROM supervisor WHERE username='$username'";
$select = mysqli_query($con, $query);

  $cekUsername = "SELECT `username` FROM supervisor WHERE `username`='$username'";
  $runCekUsername = mysqli_query($con, $cekUsername);
  $jumlahCekUsername = mysqli_num_rows($runCekUsername);


  if(($jumlahCekUsername) > 0){
    echo '<script language="JavaScript">
   alert("Username Pernah Diinputkan!");
   window.location = "list_spv_tampil.php";
   </script>';
   die;
 }

 $query = "INSERT INTO supervisor (username, password, nama, id_agency)
 VALUES ('$username', '$password', '$nama', '$id_agency')";
 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery) {

 echo '<script language="JavaScript">
   alert("Penyimpanan Berhasil!");
   window.location = "list_spv_tampil.php";
   </script>';

 } else {
  echo '<script language="JavaScript">
  alert("Penyimpanan Gagal!");
  window.location = "list_spv_tampil.php";
  </script>';
 }

$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah Form Terlebih Dahulu");
</script>
<?php
include("list_spv_input.php");
}
?>
