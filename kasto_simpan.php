<?php
if(isset($_POST['btn-save'])){
require("koneksi.php");
$track_id = $_POST['track_id'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$ktp = $_POST['ktp'];
$id_sto = $_POST['id_sto'];
$second_cp = $_POST['second_cp'];
$id_paket = $_POST['id_paket'];
$tagging_rill = $_POST['tagging_rill'];
$odp = $_POST['odp'];
$odp_ke_pelanggan = $_POST['odp_ke_pelanggan'];
$id_agency = $_POST['id_agency'];
$id_admin_agency = $_POST['id_admin_agency'];
$id_supervisor = $_POST['id_supervisor'];
$id_salesforce = $_POST['id_salesforce'];
$no_sc = $_POST['no_sc'];
$status_validasi = $_POST['status_validasi'];
$kategori_progress_psb = $_POST['kategori_progress_psb'];
$keterangan_progress_psb = $_POST['keterangan_progress_psb'];
$alamat_rill_pelanggan = $_POST['alamat_rill_pelanggan'];
$cp_rill_pelanggan = $_POST['cp_rill_pelanggan'];
$nama_teknisi = $_POST['nama_teknisi'];

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
   alert("Data Pernah Diinputkan, Silahkan Hubungi Admin Witel!");
   window.location = "kasto_tampil.php";
   </script>';
   die;
  } else if ($jumlahCekTrack > 0){
    echo '<script language="JavaScript">
   alert("Data Pernah Diinputkan, Silahkan Hubungi Admin Witel!");
   window.location = "kasto_tampil.php";
   </script>';
   die;
  } else if ($jumlahCekKTP > 0){
    echo '<script language="JavaScript">
   alert("Data Pernah Diinputkan, Silahkan Hubungi Admin Witel!");
   window.location = "kasto_tampil.php";
   </script>';
   die;
  }

 $query = "INSERT INTO data_pelanggan (id_admin_agency, track_id, nama_pelanggan, alamat, ktp, id_sto, second_cp, id_paket, tagging_rill, odp, odp_ke_pelanggan, id_agency, id_supervisor, id_salesforce, no_sc,  status_validasi, kategori_progress_psb, keterangan_progress_psb, alamat_rill_pelanggan, cp_rill_pelanggan, nama_teknisi)
 VALUES ('$id_admin_agency', '$track_id', '$nama_pelanggan', '$alamat', '$ktp', '$id_sto', '$second_cp', '$id_paket', '$tagging_rill', '$odp', '$odp_ke_pelanggan', '$id_agency', '$id_supervisor', '$id_salesforce', '$no_sc',  '$status_validasi',
   '$kategori_progress_psb', '$keterangan_progress_psb', '$alamat_rill_pelanggan', '$cp_rill_pelanggan', '$nama_teknisi')";


 $hasilQuery = mysqli_query($con, $query);

 if ($hasilQuery) {

 echo '<script language="JavaScript">
   alert("Penyimpanan Berhasil!");
   window.location = "kasto_tampil.php";
   </script>';

 } else {
  echo '<script language="JavaScript">
  alert("Penyimpanan Gagal!");
  window.location = "kasto_tampil.php";
  </script>';
 }

$con->close();
}
else{ ?>
<script language="JavaScript">
alert("Isilah Form Terlebih Dahulu");
</script>
<?php
include("kasto_input.php");
}
?>
