<?php
  include("koneksi.php");
  function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }

$paket = $_GET["paket"];

$query = "SELECT * FROM data_pelanggan
          WHERE id_paket = $paket
          ";
$pelanggan = query($query);


// var_dump($mahasiswa);


?>
<table class="table table-hover table-bordered text-center">
  <thead style="background-color:lightgrey">
    <tr>
      <th rowspan="2" class="text-center"><b>Track ID</b></th>
      <th rowspan="2" class="text-center"><b>Nama Pelanggan</b></th>
      <th rowspan="2" class="text-center"><b>Alamat</b></th>
      <th rowspan="2" class="text-center"><b>No KTP</b></th>
      <th rowspan="2" class="text-center"><b>STO</b></th>
      <th rowspan="2" class="text-center"><b>Second CP</b></th>
      <th rowspan="2" class="text-center"><b>Paket</b></th>
      <th rowspan="2" class="text-center"><b>Tagging Rill</b></th>
      <th rowspan="2" class="text-center"><b>ODP</b></th>
      <th rowspan="2" class="text-center"><b>Jarak ODP ke Pelanggan</b></th>
      <th rowspan="2" class="text-center"><b>Tanggal Input Data</b></th>
      <th rowspan="2" class="text-center"><b>Agency</b></th>
      <th rowspan="2" class="text-center"><b>Supervisor</b></th>
      <th rowspan="2" class="text-center"><b>Partner</b></th>
      <th rowspan="2" class="text-center"><b>No SC</b></th>
      <th rowspan="2" class="text-center"><b>Status Validasi</b></th>
      <th colspan="2" class="text-center"><b>Progress PSB</b></th>
      <th rowspan="2" class="text-center"><b>Alamat Rill Pelanggan</b></th>
      <th rowspan="2" class="text-center"><b>CP Rill Pelanggan</b></th>
      <th rowspan="2" class="text-center"><b>Nama Teknisi</b></th>
      <th rowspan="2" class="text-center"><b>Action</b></th>
      <tr>
          <th class="text-center"><b>Kategori</b></th>
          <th class="text-center"><b>Keterangan</b></th>
      </tr>
    </tr>

  </thead>
  <tbody>
    <?php foreach($pelanggan as $p): ?>
    <tr>
      <td><?= $p['track_id'] ?></td>
      <td><?= $p['nama_pelanggan'] ?></td>
      <td><?= $p['alamat'] ?></td>
      <td><?= $p['ktp'] ?></td>

      <?php
       $id_sto = $p['id_sto'];
       $kumpulanArea = query("SELECT * FROM sto WHERE id_sto = $id_sto");
       $area = $kumpulanArea[0]['area'];

       ?>
       <td><?= $area ?></td>

       <td><?= $p['second_cp'] ?></td>

       <?php
         if($p['id_paket'] == 1){
           $paket = 'PRESTIGE_10_470RB';
         } elseif($p['id_paket'] == 2){
           $paket = 'PRESTIGE_20_515RB';
         }elseif($p['id_paket'] == 3){
           $paket = 'PRESTIGE_50_825RB';
         }elseif($p['id_paket'] == 4){
           $paket = 'PRESTIGE_100_1.250JT';
         }elseif($p['id_paket'] == 5){
           $paket = 'PRESTIGE_200_1.990JT';
         }elseif($p['id_paket'] == 6){
           $paket = 'PRESTIGE_300_2.990JT';
         }elseif($p['id_paket'] == 7){
           $paket = 'FIT_MOVIE_10_360RB';
         }elseif($p['id_paket'] == 8){
           $paket = 'FIT_MOVIE_20_395RB';
         }elseif($p['id_paket'] == 9){
           $paket = 'FIT_MOVIE_30_480RB';
         } elseif($p['id_paket'] == 10){
           $paket = 'FIT_MOVIE_40_560RB';
         } elseif($p['id_paket'] == 11){
           $paket = 'FIT_MOVIE_50_625RB';
         } elseif($p['id_paket'] == 12){
           $paket = 'FIT_SPORTS_10_360RB';
         } elseif($p['id_paket'] == 13){
           $paket = 'FIT_SPORTS_20_395RB';
         } elseif($p['id_paket'] == 14){
           $paket = 'FIT_SPORTS_30_480RB';
         } elseif($p['id_paket'] == 15){
           $paket = 'FIT_SPORTS_40_560RB';
         } elseif($p['id_paket'] == 16){
           $paket = 'FIT_SPORTS_50_625RB';
         } elseif($p['id_paket'] == 17){
           $paket = 'FIT_DIGITAL_10_360RB';
         } elseif($p['id_paket'] == 18){
           $paket = 'FIT_DIGITAL_20_395RB';
         } elseif($p['id_paket'] == 19){
           $paket = 'FIT_DIGITAL_30_480RB';
         } elseif($p['id_paket'] == 20){
           $paket = 'FIT_DIGITAL_40_560RB';
         } elseif($p['id_paket'] == 21){
           $paket = 'FIT_DIGITAL_50_625RB';
         } elseif($p['id_paket'] == 22){
           $paket = 'GAMER_10_380RB';
         } elseif($p['id_paket'] == 23){
           $paket = 'GAMER_20_480RB';
         } elseif($p['id_paket'] == 24){
           $paket = 'GAMER_30_680RB';
         } elseif($p['id_paket'] == 25){
           $paket = 'GAMER_40_780RB';
         } elseif($p['id_paket'] == 26){
           $paket = 'GAMER_50_NORMAL';
         } elseif($p['id_paket'] == 27){
           $paket = 'GAMER_100_NORMAL';
         } elseif($p['id_paket'] == 28){
           $paket = 'STREAMIX_10_320RB';
         } elseif($p['id_paket'] == 29){
           $paket = 'STREAMIX_20_385RB';
         } elseif($p['id_paket'] == 30){
           $paket = 'STREAMIX_50_615RB';
         } elseif($p['id_paket'] == 31){
           $paket = 'STREAMIX_100_975RB';
         } elseif($p['id_paket'] == 32){
           $paket = 'PHOENIX_10_280RB';
         } elseif($p['id_paket'] == 33){
           $paket = 'PHOENIX_20_345RB';
         } elseif($p['id_paket'] == 34){
           $paket = 'PHOENIX_50_575RB';
         } elseif($p['id_paket'] == 35){
           $paket = 'PHOENIX_100_935RB';
       ?>
       <td><?= $paket ?></td>

       <td><?= $p['tagging_rill'] ?></td>
       <td><?= $p['odp'] ?></td>
       <td><?= $p['odp_ke_pelanggan'] ?></td>
       <td><?= $p['tgl_input'] ?></td>

      <?php
       $id_agency = $p['id_agency'];
       $kumpulanAgency = query("SELECT * FROM agency WHERE id_agency = $id_agency");
       $nama_agency = $kumpulanNamaAgency[0]['nama_agency'];

       ?>
       <td><?= $nama_agency ?></td>

       <?php
        $id_supervisor = $p['id_supervisor'];
        $kumpulanSupervisor = query("SELECT * FROM supervisor WHERE id_supervisor = $id_supervisor");
        $namaSupervisor = $kumpulanNamaSupervisor[0]['nama'];

        ?>
        <td><?= $namaSupervisor ?></td>

        <?php
         $id_salesforce = $p['id_salesforce'];
         $kumpulanSalesforce = query("SELECT * FROM salesforce WHERE id_salesforce = $id_salesforce");
         $namaSalesforce = $kumpulanNamaSalesforce[0]['nama'];

         ?>
         <td><?= $namaSalesforce ?></td>

         <td><?= $p['no_sc'] ?></td>
         <td><?= $p['status_validasi'] ?></td>
         <td><?= $p['kategori_progress_psb'] ?></td>
         <td><?= $p['keterangan_progress_psb'] ?></td>
         <td><?= $p['alamat_rill_pelanggan'] ?></td>
         <td><?= $p['cp_rill_pelanggan'] ?></td>
         <td><?= $p['nama_teknisi'] ?></td>

      <td><a href="manager_edit.php?id=<?= $p['id'] ?>" name="btn-edit"
          onclick="return confirm(&quot;Yakin Ingin Mengedit Data?&quot;);">Edit</a> | <a
          href="manager_hapus_pelanggan.php?id=<?= $p['id'] ?>" name="btn-edit"
          onclick="return confirm(&quot;Yakin Ingin Menghapus Data?&quot;);">Delete</a></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
