<?php
include("koneksi.php");
$id = $_SESSION['id'];

function query($query){
  global $con;

  $hasil = mysqli_query($con, $query);
  $rows=[];

  while ($row = mysqli_fetch_assoc($hasil)){
      $rows[] = $row;
  }

  return $rows;
}

function cari1($keyword1){
  $query = "SELECT * FROM data_pelanggan
            WHERE id != 0 AND
            track_id LIKE '%$keyword1%'
            ";

  return query($query);
}

$pelanggan = query("SELECT * FROM data_pelanggan");

if (isset($_POST['cari1'])) {
  $pelanggan = cari1($_POST["kata-kunci1"]);
}

function cari2($keyword2){
  $query = "SELECT * FROM data_pelanggan
            WHERE id != 0 AND
            (nama_pelanggan LIKE '%$keyword2%')
            ";

  return query($query);
}

if (isset($_POST['cari2'])) {
  $pelanggan = cari2($_POST["kata-kunci2"]);
}

?>

<table class="table table-hover table-bordered text-center">
  <thead style="background-color:lightgrey">
      <th rowspan="2" class="text-center"><b>Track ID</b></th>
      <th rowspan="2" class="text-center"><b>Nama Pelanggan</b></th>
      <th rowspan="2" class="text-center"><b>Alamat</b></th>
      <th rowspan="2" class="text-center"><b>STO</b></th>
      <th rowspan="2" class="text-center"><b>Second CP</b></th>
      <th rowspan="2" class="text-center"><b>Paket</b></th>
      <th rowspan="2" class="text-center"><b>Tagging Rill</b></th>
      <th rowspan="2" class="text-center"><b>Jarak ODP ke Pelanggan</b></th>
      <th rowspan="2" class="text-center"><b>No SC</b></th>
      <th rowspan="2" class="text-center"><b>Alamat Rill Pelanggan</b></th>
      <th rowspan="2" class="text-center"><b>CP Rill Pelanggan</b></th>
      <th colspan="2" class="text-center"><b>Progress PSB</b></th>
      <th rowspan="2" class="text-center"><b>Nama Teknisi</b></th>
      <th rowspan="2" class="text-center"><b>Action</b></th>
        <tr>
            <th class="text-center"><b>Kategori</b></th>
            <th class="text-center"><b>Keterangan</b></th>
        </tr>

    </thead>
<tbody>
<?php
$id = $_SESSION['id'];
foreach($pelanggan as $p){
echo "<tr>"; ?>
  <td><?php echo $p['track_id'] ?></td>
  <td><?php echo $p['nama_pelanggan'] ?></td>
  <td><?php echo $p['alamat'] ?></td>
  <td><?php

    if ($p['id_sto'] == 0){
      $sto= 'Tidak Memiliki STO';
    } else {
      $id_sto = $p['id_sto'];
      $query_sto = "SELECT area FROM sto WHERE id_sto = $id_sto";
      $run_sto = mysqli_query($con, $query_sto);
      $hasil_sto = mysqli_fetch_array($run_sto);
      $sto = $hasil_sto['area'];
    }
    echo $sto ?>

  </td>
  <td><?php echo $p['second_cp'] ?></td>
  <td><?php

    if ($p['id_paket'] == 0){
      $paket = 'Tidak Memiliki Paket';
    } else {
      $id_paket = $p['id_paket'];
      $query_paket = "SELECT nama_paket FROM paket WHERE id_paket = $id_paket";
      $run_paket = mysqli_query($con, $query_paket);
      $hasil_paket = mysqli_fetch_array($run_paket);
      $paket = $hasil_paket['nama_paket'];
    }
    echo $paket ?>

  </td>
  <td><?php echo $p['tagging_rill'] ?></td>
  <td><?php echo $p['odp_ke_pelanggan'] ?></td>
  <td><?php echo $p['no_sc'] ?></td>
  <td><?php echo $p['alamat_rill_pelanggan'] ?></td>
  <td><?php echo $p['cp_rill_pelanggan'] ?></td>
  <td><?php echo $p['kategori_progress_psb'] ?></td>
  <td><?php echo $p['keterangan_progress_psb'] ?></td>
  <td><?php echo $p['nama_teknisi'] ?></td>
            <td><a href="teknisi_edit.php?id=<?php echo $p['id'] ?>" name="btn-edit" onClick='return confirm("Yakin Ingin Mengedit Data?");'>Edit</a></td>
           <?php /* <td><a href="ag_hapus.php?id_ag=<?php echo $data['id_ag'] ?>" name="btn-hapus" onClick='return confirm("Yakin ingin menghapus data?");'>Hapus</a></td> */ ?>
<?php echo "</tr>";
       }
?>
</tbody>
</table>
