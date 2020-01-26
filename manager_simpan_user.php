<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$akses = $_POST['akses'];
$id_sto = $_POST['id_sto'];
$nama = $_POST['nama'];


$query = "SELECT * FROM user WHERE username='$username'";
$select = mysqli_query($con, $query);


  $cekUsername = "SELECT `username` FROM user WHERE `username`='$username'";
  // echo $cekTrack;
  $runCekUsername = mysqli_query($con, $cekUsername);
  $jumlahCekUsername = mysqli_num_rows($runCekUsername);



  if(($jumlahCekUsername) > 0){
    echo '<script language="JavaScript">
   alert("Username dan Jabatan Pernah Diinputkan!");
   window.location = "manager_tampil_user.php";
   </script>';
   die;
 }

 $query = "INSERT INTO user (username, password, akses, id_sto, nama)
 VALUES ('$username', '$password', '$akses', '$id_sto', '$nama')";
 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery) {

 echo '<script language="JavaScript">
   alert("Penyimpanan Berhasil!");
   window.location = "manager_tampil_user.php";
   </script>';

 } else {
  echo '<script language="JavaScript">
  alert("Penyimpanan Gagal!");
  window.location = "manager_tampil_user.php";
  </script>';
 }

$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah Form Terlebih Dahulu");
</script>
<?php
include("manager_input_user.php");
}
?>
