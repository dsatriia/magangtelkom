<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$password = $_POST['email'];
$password = $_POST['telpon'];
$password = $_POST['hp'];
$password = $_POST['id_sto'];
$password = $_POST['id_agency'];
$password = $_POST['regional'];
$password = $_POST['witel'];
$password = $_POST['datel'];
$password = $_POST['tanggal_aktif'];
$password = $_POST['akses'];

$query = "SELECT * FROM manager WHERE username='$username'";
$select = mysqli_query($con, $query);

  $cekUsername = "SELECT `username` FROM manager WHERE `username`='$username'";
  $runCekUsername = mysqli_query($con, $cekUsername);
  $jumlahCekUsername = mysqli_num_rows($runCekUsername);


  if(($jumlahCekUsername) > 0){
    echo '<script language="JavaScript">
   alert("Username Pernah Diinputkan!");
   window.location = "list_manager_tampil.php";
   </script>';
   die;
 }

 $query = "INSERT INTO manager (nama,username, password, email, telpon, hp, id_sto, id_agency, regional, witel, datel, tanggal_aktif, akses)
 VALUES ('$nama','$username', '$password', '$email', '$telpon', '$hp', '$id_sto', '$id_agency', '$regional', '$witel', '$datel', '$tanggal_aktif', '$akses')";
 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery) {

 echo '<script language="JavaScript">
   alert("Penyimpanan Berhasil!");
   window.location = "list_manager_tampil.php";
   </script>';

 } else {
  echo '<script language="JavaScript">
  alert("Penyimpanan Gagal!");
  window.location = "list_manager_tampil.php";
  </script>';
 }

$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah Form Terlebih Dahulu");
</script>
<?php
include("list_manager_input.php");
}
?>
