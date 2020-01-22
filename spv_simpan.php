<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
$track_id = $_POST['track_id'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$ktp = $_POST['ktp'];
$sto = $_POST['sto'];
$second_cp = $_POST['second_cp'];
$paket = $_POST['paket'];
$tagging_rill = $_POST['tagging_rill'];
$odp = $_POST['odp'];
$odp_ke_pelanggan = $_POST['odp_ke_pelanggan'];
$id_partner = $_POST['id_partner'] ;
$id_spv = $_POST['id_spv'] ;
$id_agency = $_POST['id_agency'] ;




$query = "SELECT * FROM data_pelanggan WHERE track_id='$track_id' AND ktp='$ktp'";
$select = mysqli_query($con, $query);


  $cekTrack = "SELECT `track_id` FROM data_pelanggan WHERE `track_id`='$track_id'";
  // echo $cekTrack;
  $runCekTrack = mysqli_query($con, $cekTrack);
  $jumlahCekTrack = mysqli_num_rows($runCekTrack);


  $cekKTP = "SELECT `ktp` FROM data_pelanggan WHERE `ktp`=$ktp";
  $runCekKTP = mysqli_query($con, $cekKTP);
  $jumlahCekKTP = mysqli_num_rows($runCekKTP);


  if(($jumlahCekKTP && $jumlahCekTrack) > 0){
    echo '<script language="JavaScript">
   alert("KTP dan Track ID Pernah Diinputkan, Silahkan Hubungi Admin Witel!");
   window.location = "spv_tampil.php";
   </script>';
   die;
  } else if ($jumlahCekTrack > 0){
    echo '<script language="JavaScript">
   alert("Track ID Pernah Diinputkan, Silahkan Hubungi Admin Witel!");
   window.location = "spv_tampil.php";
   </script>';
   die;
  } else if ($jumlahCekKTP > 0){
    echo '<script language="JavaScript">
   alert("KTP Pernah Diinputkan, Silahkan Hubungi Admin Witel!");
   window.location = "spv_tampil.php";
   </script>';
   die;
  }

 $query = "INSERT INTO data_pelanggan (track_id, nama_pelanggan, alamat, ktp, sto, second_cp, paket, tagging_rill, odp, odp_ke_pelanggan, id_partner, id_spv, id_agency)
 VALUES ('$track_id', '$nama_pelanggan', '$alamat', '$ktp', '$sto', '$second_cp', '$paket', '$tagging_rill', '$odp', '$odp_ke_pelanggan', '$id_partner', '$id_spv', '$id_agency')";
 $hasilQuery = mysqli_query($con, $query);
// echo $query;die;

 if ($hasilQuery) {

 echo '<script language="JavaScript">
   alert("Penyimpanan Berhasil!");
   window.location = "spv_tampil.php";
   </script>';

 } else {
  echo '<script language="JavaScript">
  alert("Penyimpanan Gagal!");
  window.location = "spv_tampil.php";
  </script>';
 }

$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah Form Terlebih Dahulu");
</script>
<?php
include("spv_input.php");
}
?>
