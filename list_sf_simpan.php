<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$id_supervisor = $_POST['id_supervisor'];

$query = "SELECT * FROM salesforce WHERE username='$username'";
$select = mysqli_query($con, $query);

  $cekUsername = "SELECT `username` FROM salesforce WHERE `username`='$username'";
  $runCekUsername = mysqli_query($con, $cekUsername);
  $jumlahCekUsername = mysqli_num_rows($runCekUsername);


  if(($jumlahCekUsername) > 0){
    echo '<script language="JavaScript">
   alert("Username Pernah Diinputkan!");
   window.location = "list_sf_tampil.php";
   </script>';
   die;
 }

 $query = "INSERT INTO salesforce (username, password, nama, id_supervisor)
 VALUES ('$username', '$password', '$nama', '$id_supervisor')";
 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery) {

 echo '<script language="JavaScript">
   alert("Penyimpanan Berhasil!");
   window.location = "list_sf_tampil.php";
   </script>';

 } else {
  echo '<script language="JavaScript">
  alert("Penyimpanan Gagal!");
  window.location = "list_sf_tampil.php";
  </script>';
 }

$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah Form Terlebih Dahulu");
</script>
<?php
include("list_sf_input.php");
}
?>
