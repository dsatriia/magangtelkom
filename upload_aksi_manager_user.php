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
	$username = $data->val($i, 1);
    $password = $data->val($i, 2);
    $akses = $data->val($i, 3);
    $id_sto = $data->val($i, 4);
    $nama = $data->val($i, 5);
    $nik = $data->val($i, 6);
    $email = $data->val($i, 7);
    $telpon = $data->val($i, 8);
    $hp = $data->val($i, 9);
    $id_agency = $data->val($i, 10);
    $id_admin_agency = $data->val($i, 11);
    $id_supervisor = $data->val($i, 12);
    $regional = $data->val($i, 13);
    $witel = $data->val($i, 14);
    $datel = $data->val($i, 15);
    $tanggal_aktif = date("Y-m-d h:i:s");

    if ($username != "" && $password != ""){

	    if($akses == 1){
		    // input data ke database (table admin_agency & user)
		    $hasil = mysqli_query($con,"INSERT into admin_agency values('','$username','$password','$akses','$id_sto','$nama','$email','$telpon','$hp','$id_agency','$regional','$witel','$datel','$tanggal_aktif')");
            if ($hasil){
                $hasil_user = mysqli_query($con,"INSERT into user values('','$username','$password','$akses','$nama','$id_sto')");
                $berhasil++;
            }
        }
        else if($akses == 2){
		    // input data ke database (table supervisor & user)
		    $hasil = mysqli_query($con,"INSERT into supervisor values('','$id_admin_agency','$username','$password','$akses','$id_sto','$nama','$email','$telpon','$hp','$id_agency','$regional','$witel','$datel','$tanggal_aktif')");
            if ($hasil){
                $hasil_user = mysqli_query($con,"INSERT into user values('','$username','$password','$akses','$nama','$id_sto')");
                $berhasil++;
            }
        }
        else if($akses == 3){
		    // input data ke database (table salesforce & user)
		    $hasil = mysqli_query($con,"INSERT into salesforce values('','$id_supervisor','$username','$password','$akses','$id_sto','$nama','$email','$telpon','$hp','$id_agency','$regional','$witel','$datel','$tanggal_aktif')");
            if ($hasil){
                $hasil_user = mysqli_query($con,"INSERT into user values('','$username','$password','$akses','$nama','$id_sto')");
                $berhasil++;
            }
        }
        else if($akses == 5 || $akses == 6 || $akses == 7){
		    // input data ke database (table detail_teknis & user)
		    $hasil = mysqli_query($con,"INSERT into detail_teknis values('','$username','$password','$akses','$id_sto','$nama','$email','$telpon','$hp','$regional','$witel','$datel','$tanggal_aktif')");
            if ($hasil){
            $hasil_user = mysqli_query($con,"INSERT into user values('','$username','$password','$akses','$nama','$id_sto')");
            $berhasil++;
            }
        }
        else if($akses == 4 || $akses == 8 || $akses == 9 || $akses == 10){
		    // input data ke database (table detail_picwitel & user)
		    $hasil = mysqli_query($con,"INSERT into detail_picwitel values('','$username','$password','$akses','$id_sto','$nama','$nik','$email','$telpon','$hp','$regional','$witel','$datel','$tanggal_aktif')");
            if ($hasil){
            $hasil_user = mysqli_query($con,"INSERT into user values('','$username','$password','$akses','$nama','$id_sto')");
            $berhasil++;
            }
        }
        }
}

// hapus kembali file .xls yang di upload tadi
// unlink($_FILES['filepelanggan']['name']);

// alihkan halaman ke manager_tampil.php
// header("location:manager_tampil.php?berhasil=$berhasil");

if (($berhasil) > 0){
    echo '<script language="JavaScript">
    alert("Berhasil Mengimport : '. $berhasil.' User!");
    window.location = "manager_tampil_list_user.php";
    </script>';
}
else {
    echo '<script language="JavaScript">
    alert("Tidak ada user yang diimport.");
    window.location = "manager_tampil_list_user.php";
    </script>';
}
?>
