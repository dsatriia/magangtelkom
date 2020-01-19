<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
$nama = $_POST['username'];
$akses = $_POST['password'];
$akses = $_POST['akses'];
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
   window.location = "list_user_tampil.php";
   </script>';
   die;
 }

 $query = "INSERT INTO user (username, password, akses, nama)
 VALUES ('$username', '$password', '$akses', '$nama')";
 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery) {

 echo '<script language="JavaScript">
   alert("Penyimpanan Berhasil!");
   window.location = "list_user_tampil.php";
   </script>';

 } else {
  echo '<script language="JavaScript">
  alert("Penyimpanan Gagal!");
  window.location = "list_user_tampil.php";
  </script>';
 }

$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah Form Terlebih Dahulu");
</script>
<?php
include("list_user_input.php");
}
?>
