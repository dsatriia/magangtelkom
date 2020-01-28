<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];

$query = "SELECT * FROM agency WHERE username='$username'";
$select = mysqli_query($con, $query);

  $cekUsername = "SELECT `username` FROM agency WHERE `username`='$username'";
  $runCekUsername = mysqli_query($con, $cekUsername);
  $jumlahCekUsername = mysqli_num_rows($runCekUsername);


  if(($jumlahCekUsername) > 0){
    echo '<script language="JavaScript">
   alert("Username Pernah Diinputkan!");
   window.location = "manager_tampil_ag.php";
   </script>';
   die;
 }

 $query = "INSERT INTO agency (username, password, nama)
 VALUES ('$username', '$password', '$nama')";
 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery) {

 echo '<script language="JavaScript">
   alert("Penyimpanan Berhasil!");
   window.location = "manager_tampil_ag.php";
   </script>';

 } else {
  echo '<script language="JavaScript">
  alert("Penyimpanan Gagal!");
  window.location = "manager_tampil_ag.php";
  </script>';
 }

$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah Form Terlebih Dahulu");
</script>
<?php
include("manager_input_ag.php");
}
?>
