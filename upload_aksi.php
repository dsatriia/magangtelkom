<!-- www.malasngoding.com -->

<?php
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filepelanggan']['name']) ;

move_uploaded_file($_FILES['filepelanggan']['tmp_name'], $target);


// beri permisi agar file xls dapat di baca
chmod($_FILES['filepelanggan']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepelanggan']['name'],false);

// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);


// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$track_id     = $data->val($i, 1);
    $nama_pelanggan   = $data->val($i, 2);
    $alamat = $data->val($i, 3);
    $ktp  = $data->val($i, 4);
    $id_sto  = $data->val($i, 5);
    $second_cp  = $data->val($i, 6);
    $id_paket  = $data->val($i, 7);
    $tagging_rill  = $data->val($i, 8);
    $odp  = $data->val($i, 9);
    $odp_ke_pelanggan  = $data->val($i, 10);
    $tgl_input  = $data->val($i, 11);
    $id_agency  = $data->val($i, 12);
    $id_admin_agency  = $data->val($i, 13);
    $id_supervisor  = $data->val($i, 14);
    $id_salesforce  = $data->val($i, 15);
    $no_sc  = $data->val($i, 16);
    $status_validasi  = $data->val($i, 17);
    $kategori_progress_psb  = $data->val($i, 18);
    $keterangan_progress_psb  = $data->val($i, 19);
    $alamat_rill_pelanggan  = $data->val($i, 20);
    $cp_rill_pelanggan  = $data->val($i, 21);
    $nama_teknisi  = $data->val($i, 22);


	if($track_id != "" && $ktp != "" && $nama_pelanggan != ""){
		// input data ke database (table data_pegawai)
		$hasil = mysqli_query($con,"INSERT into data_pelanggan values('','$track_id','$nama_pelanggan','$alamat','$ktp','$id_sto','$second_cp','$id_paket','$tagging_rill','$odp','$odp_ke_pelanggan','$tgl_input','$id_agency','$id_admin_agency','$id_supervisor','$id_salesforce','$no_sc','$status_validasi','$kategori_progress_psb','$keterangan_progress_psb','$alamat_rill_pelanggan','$cp_rill_pelanggan','$nama_teknisi')");
        if ($hasil){
            $berhasil++;
        }

	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepelanggan']['name']);

// alihkan halaman ke manager_tampil.php
// header("location:manager_tampil.php?berhasil=$berhasil");

if (($berhasil) > 0){
    echo '<script language="JavaScript">
    alert("Berhasil Mengimport : '. $berhasil.' Data!");
    window.location = "manager_tampil.php";
    </script>';
}
else {
    echo '<script language="JavaScript">
    alert("Tidak ada data yang diimport.");
    window.location = "manager_tampil.php";
    </script>';
}
?>
