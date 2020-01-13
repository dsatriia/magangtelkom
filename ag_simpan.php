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
$agency = $_POST['agency'];
$id_partner = $_POST['id_partner'];
$spv = $_POST['spv'];

$query = "SELECT * FROM data_pelanggan WHERE track_id='$track_id' AND ktp='$ktp'";
$select = mysqli_query($con, $query);


// $data = mysqli_fetch_array($select);
// var_dump($query);die;
// if($track_id==$data['track_id'] && $ktp==$data['ktp']){
//  echo '<script language="JavaScript">
//  alert("Penyimpanan gagal:\nData sudah ada");
//    </script>';
//  include("ag_input.php");
// }
// else{

  $cekTrack = "SELECT `track_id` FROM data_pelanggan WHERE `track_id`='$track_id'";
  // echo $cekTrack;
  $runCekTrack = mysqli_query($con, $cekTrack);
  $jumlahCekTrack = mysqli_num_rows($runCekTrack);


  $cekKTP = "SELECT `ktp` FROM data_pelanggan WHERE `ktp`=$ktp";
  $runCekKTP = mysqli_query($con, $cekKTP);
  $jumlahCekKTP = mysqli_num_rows($runCekKTP);


  if(($jumlahCekKTP && $jumlahCekTrack) > 0){
    echo '<script language="JavaScript">
   alert("KTP dan Track pernah diinputkan, silahkan hubungi admin witel!");
   window.location = "ag_tampil.php";
   </script>';
   die;
  } else if ($jumlahCekTrack > 0){
    echo '<script language="JavaScript">
   alert("Track ID pernah diinputkan, silahkan hubungi admin witel!");
   window.location = "ag_tampil.php";
   </script>';
   die;
  } else if ($jumlahCekKTP > 0){
    echo '<script language="JavaScript">
   alert("KTP pernah diinputkan, silahkan hubungi admin witel!");
   window.location = "ag_tampil.php";
   </script>';
   die;
  }

 $query = "INSERT INTO data_pelanggan (track_id, nama_pelanggan, alamat, ktp, sto, second_cp, paket, tagging_rill, odp, odp_ke_pelanggan, agency, id_partner, spv)
 VALUES ('$track_id', '$nama_pelanggan', '$alamat', '$ktp', '$sto', '$second_cp', '$paket', '$tagging_rill', '$odp', '$odp_ke_pelanggan', '$agency', '$id_partner', '$spv')";
 $hasilQuery = mysqli_query($con, $query);


 if ($hasilQuery) {
   
 echo '<script language="JavaScript">
   alert("Penyimpanan berhasil");
   window.location = "ag_tampil.php";
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
include("ag_input.php");
}
?>
