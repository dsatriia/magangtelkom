<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$id_sto = $_POST['id_sto'];
$email = $_POST['email'];
$telpon = $_POST['telpon'];
$hp = $_POST['hp'];
$regional = $_POST['regional'];
$witel = $_POST['witel'];
$datel = $_POST['datel'];
$akses = 6;

  $cekUsername = "SELECT `username` FROM detail_teknis WHERE `username`='$username'";
  // echo $cekTrack;
  $runCekUsername = mysqli_query($con, $cekUsername);
  $jumlahCekUsername = mysqli_num_rows($runCekUsername);

  if(($jumlahCekUsername) > 0){
    echo '<script language="JavaScript">
   alert("Username Pernah Diinputkan!");
   window.location = "manager_tampil_tl.php";
   </script>';
   die;
 }

 $query = "INSERT INTO detail_teknis (username, password, nama, id_sto, email, telpon, hp, regional, witel, datel, akses)
 VALUES ('$username', '$password', '$nama', '$id_sto', '$email', '$telpon', '$hp', '$regional', '$witel', '$datel', '$akses')";
 $hasilQuery = mysqli_query($con, $query);


 if ($hasilQuery) {
    $queryUser = "INSERT INTO user (username, password, akses, nama, id_sto)
    VALUES ('$username', '$password', '$akses', '$nama', '$id_sto')";
    $hasilQueryUser = mysqli_query($con, $queryUser);

  echo '<script language="JavaScript">
   alert("Penyimpanan Berhasil!");
   window.location = "manager_tampil_tl.php";
   </script>';

 } else {
  echo '<script language="JavaScript">
  alert("Penyimpanan Gagal!");
  window.location = "manager_tampil_tl.php";
  </script>';
 }

$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah Form Terlebih Dahulu");
</script>
<?php
include("manager_input_tl.php");
}
?>
