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

// move_uploaded_file($_FILES['filepelanggan']['tmp_name'], $target);


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
	$username = $data->val($i, 1);
    $password = $data->val($i, 2);

    $id_sto2 = $data->val($i, 3);
    $query = "SELECT id_sto FROM sto WHERE area = '$id_sto2'";
    $hasil = mysqli_query($con,$query);

    while ($id_sto_array = mysqli_fetch_array($hasil)){
        $id_sto = $id_sto_array[0];
    }

    $nama = $data->val($i, 4);
    $email = $data->val($i, 5);
    $telpon = $data->val($i, 6);
    $hp = $data->val($i, 7);

    $id_agency2 = $data->val($i, 8);
    $query = "SELECT id_agency FROM agency WHERE nama_agency = '$id_agency2'";
    $hasil = mysqli_query($con,$query);

    while ($id_agency_array = mysqli_fetch_array($hasil)){
        $id_agency = $id_agency_array[0];
    }

    $id_supervisor2 = $data->val($i, 9);

    $query = "SELECT id_supervisor FROM supervisor WHERE nama = '$id_supervisor2'";
    $hasil = mysqli_query($con,$query);

    while ($id_supervisor_array = mysqli_fetch_array($hasil)){
        $id_supervisor = $id_supervisor_array[0];
    }
    
    $regional = $data->val($i, 10);
    $witel = $data->val($i, 11);
    $datel = $data->val($i, 12);
    $akses = 3;
    $tanggal_aktif = date("Y-m-d h:i:s");

    if ($username != "" && $password != ""){
		    // input data ke database (table salesforce & user)
		    $hasil = mysqli_query($con,"INSERT into salesforce values('','$id_supervisor','$username','$password','$akses','$id_sto','$nama','$email','$telpon','$hp','$id_agency','$regional','$witel','$datel','$tanggal_aktif')");
            if ($hasil){
                $hasil_user = mysqli_query($con,"INSERT into user values('','$username','$password','$akses','$nama','$id_sto')");
                $berhasil++;
            }
    }
}

// hapus kembali file .xls yang di upload tadi
// unlink($_FILES['filepelanggan']['name']);

// alihkan halaman ke manager_tampil.php
// header("location:manager_tampil_spv.php?berhasil=$berhasil");
// header("location:manager_tampil_spv.php");


if (($berhasil) > 0){
    echo '<script language="JavaScript">
    alert("Berhasil Mengimport '. $berhasil.' Data!");
    window.location = "manager_tampil_sf.php";
    </script>';
}
else {
    echo '<script language="JavaScript">
    alert("Tidak ada data yang diimport.");
    window.location = "manager_tampil_sf.php";
    </script>';
}
// if (($berhasil) < 0) {
// header("location:manager_tampil_spv.php?berhasil=$berhasil");
// }
?>
