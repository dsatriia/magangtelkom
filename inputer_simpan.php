<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
$no_sc = $_POST['no_sc'];
$status_validasi = $_POST['status_validasi'];

$query = "SELECT * FROM data_pelanggan WHERE track_id='$track_id' AND ktp='$ktp'";
$select = mysqli_query($con, $query);

$cekTrack = "SELECT `track_id` FROM data_pelanggan WHERE `track_id`='$track_id'";
echo $cekTrack;
$runCekTrack = mysqli_query($con, $cekTrack);
$jumlahCekTrack = mysqli_num_rows($runCekTrack);

$cekKTP = "SELECT `ktp` FROM data_pelanggan WHERE `ktp`=$ktp";
$runCekKTP = mysqli_query($con, $cekKTP);
$jumlahCekKTP = mysqli_num_rows($runCekKTP);


  // if(($jumlahCekKTP && $jumlahCekTrack) > 0){
  //   echo '<script language="JavaScript">
  //  alert("KTP dan Track pernah diinputkan, silahkan hubungi admin witel!");
  //  window.location = "ag_tampil.php";
  //  </script>';
  //  die;
  // } else if ($jumlahCekTrack > 0){
  //   echo '<script language="JavaScript">
  //  alert("Track ID pernah diinputkan, silahkan hubungi admin witel!");
  //  window.location = "ag_tampil.php";
  //  </script>';
  //  die;
  // } else if ($jumlahCekKTP > 0){
  //   echo '<script language="JavaScript">
  //  alert("KTP pernah diinputkan, silahkan hubungi admin witel!");
  //  window.location = "ag_tampil.php";
  //  </script>';
  //  die;
  // }

$query = "INSERT INTO data_pelanggan (no_sc, status_validasi)
 VALUES ('$no_sc', '$status_validasi')";
$hasilQuery = mysqli_query($con, $query);


 if ($hasilQuery) {
 echo '<script language="JavaScript">
   alert("Penyimpanan berhasil");
   window.location = "inputer_tampil.php";
   </script>';

 }

// }
$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah form terlebih dahulu");
</script>
<?php
include("inputer_input.php");
}
?>
