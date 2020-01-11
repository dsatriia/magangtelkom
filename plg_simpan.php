<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
$track_id = $_POST['track_id'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$ktp = $_POST['ktp'];
$alamat = $_POST['alamat'];
$sto = $_POST['sto'];
$second_cp = $_POST['second_cp'];
$paket = $_POST['paket'];
$tagging_rill = $_POST['tagging_rill'];
$odp = $_POST['odp'];
$odp_ke_pelanggan = $_POST['jarak_odp_ke_pelanggan'];

$agency = $_POST['agency'];
$id_partner = $_POST['id_partner'];
$no_sc = $_POST['no_sc'];
$spv = $_POST['spv'];
$status_validasi = $_POST['status_validasi'];
$kategori_progress_psb = $_POST['kategori_progress_psb'];
$keterangan_progress_psb = $_POST['keterangan_progress_psb'];
$query = "SELECT * FROM data_pelanggan WHERE track_id='$track_id' AND ktp='$ktp'";
$select = mysqli_query($con, $query);


// $data = mysqli_fetch_array($select);
// var_dump($query);die;
// if($track_id==$data['track_id'] && $ktp==$data['ktp']){
//  echo '<script language="JavaScript">
//  alert("Penyimpanan gagal:\nData sudah ada");
//    </script>';
//  include("plg_input.php");
// }
// else{

  $cekTrack = "SELECT `track_id` FROM data_pelanggan WHERE `track_id`='$track_id'";
  echo $cekTrack;
  $runCekTrack = mysqli_query($con, $cekTrack);
  $jumlahCekTrack = mysqli_num_rows($runCekTrack);


  $cekKTP = "SELECT `ktp` FROM data_pelanggan WHERE `ktp`=$ktp";
  $runCekKTP = mysqli_query($con, $cekKTP);
  $jumlahCekKTP = mysqli_num_rows($runCekKTP);

  
  if(($jumlahCekKTP && $jumlahCekTrack) > 0){
    echo '<script language="JavaScript">
   alert("KTP dan Track pernah diinputkan, silahkan hubungi admin witel!");
   window.location = "barang_tampil.php";
   </script>';
   die;
  } else if ($jumlahCekTrack > 0){
    echo '<script language="JavaScript">
   alert("Track ID pernah diinputkan, silahkan hubungi admin witel!");
   window.location = "barang_tampil.php";
   </script>';
   die;
  } else if ($jumlahCekKTP > 0){
    echo '<script language="JavaScript">
   alert("KTP pernah diinputkan, silahkan hubungi admin witel!");
   window.location = "barang_tampil.php";
   </script>';
   die;
  } 

 $query = "INSERT INTO data_pelanggan (track_id, nama_pelanggan, ktp, alamat, sto, second_cp, paket, tagging_rill, odp, odp_ke_pelanggan, agency, id_partner, no_sc, spv, status_validasi,
   kategori_progress_psb, keterangan_progress_psb)
 VALUES ('$track_id', '$nama_pelanggan', '$ktp', '$alamat', '$sto', '$second_cp', '$paket', '$tagging_rill', '$odp', '$odp_ke_pelanggan', '$agency', '$id_partner', '$no_sc', '$spv', '$status_validasi',
        '$kategori_progress_psb', '$keterangan_progress_psb')";
 $hasilQuery = mysqli_query($con, $query);


 if ($hasilQuery) {
 echo '<script language="JavaScript">
   alert("Penyimpanan berhasil");
   window.location = "barang_tampil.php";
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
include("plg_input.php");
}
?>
