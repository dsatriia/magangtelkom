<?php
include("koneksi.php");
function query($query){
  global $con;

  $hasil = mysqli_query($con, $query);
  $rows=[];

  while ($row = mysqli_fetch_assoc($hasil)){
      $rows[] = $row;
  }

  return $rows;
}

function cari($keyword){
  $query = "SELECT * FROM data_pelanggan
            WHERE
            nama_pelanggan LIKE '%$keyword%'
            ";
            
  return query($query);
}

$pelanggan = query("SELECT * FROM data_pelanggan");

if (isset($_POST['cari'])) {
  $pelanggan = cari($_POST["kata-kunci"]);
}

?>



<form action="" method="post">
  <div class="form-group">
      <input name="kata-kunci" class="form-control border-input" type="text" placeholder="Masukkan kata kunci pencarian...">
      <button class="btn btn-primary" name="cari" type="submit">Cari</button>
  </div>
      
</form>

<table class="table table-hover table-bordered text-center">
    <thead style="background-color:lightgrey" >
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
    </thead>
<tbody>
<?php



    $id = $_SESSION['id'];
    // $query = "SELECT * FROM data_pelanggan";
    // $hasil = mysqli_query($con,$query);
    foreach($pelanggan as $p){
    echo "<tr>"; ?>
      <td><?php echo $p['track_id'] ?></td>
      <td><?php echo $p['nama_pelanggan'] ?></td>
      <td><?php echo $p['alamat'] ?></td>
      <td><?php echo $p['ktp'] ?></td>
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
      <td><?php echo $p['odp'] ?></td>
      <td><?php echo $p['odp_ke_pelanggan'] ?></td>
      <td><?php echo $p['tgl_input'] ?></td>
      <td><?php

        if ($p['id_agency'] == 0){
          $agency= 'Tidak Memiliki Agency';
        } else {
          $id_agency = $p['id_agency'];
          $query_agency = "SELECT nama_agency FROM agency WHERE id_agency = $id_agency";
          $run_agency = mysqli_query($con, $query_agency);
          $hasil_agency = mysqli_fetch_array($run_agency);
          $agency = $hasil_agency['nama_agency'];
        }
        echo $agency ?>
      </td>
      <td>

      <?php
      if ($p['id_supervisor'] == 0){
        $spv = 'Belum Ada Supervisor';
      } else {
        $id_supervisor = $p['id_supervisor'];
        $query_supervisor = "SELECT nama FROM supervisor WHERE id_supervisor = $id_supervisor";
        $run_supervisor = mysqli_query($con, $query_supervisor);
        $hasil_supervisor = mysqli_fetch_array($run_supervisor);
        $supervisor = $hasil_supervisor['nama'];
      }

      echo $supervisor ?>
      </td>
      <td>
              <?php

              if ($p['id_salesforce'] == 0){
                $partner = 'Belum Ada Sales Force';
              }else {
                $id_partner = $p['id_salesforce'];
                $query_partner = "SELECT nama FROM salesforce WHERE id_salesforce = $id_partner";
                $run_partner = mysqli_query($con, $query_partner);
                $hasil_partner = mysqli_fetch_array($run_partner);
                $partner = $hasil_partner['nama'];
              }

              echo $partner?>
            </td>
      <td><?php echo $p['no_sc'] ?></td>
      <td><?php echo $p['status_validasi'] ?></td>
      <td><?php echo $p['kategori_progress_psb'] ?></td>
      <td><?php echo $p['keterangan_progress_psb'] ?></td>
      <td><?php echo $p['alamat_rill_pelanggan'] ?></td>
      <td><?php echo $p['cp_rill_pelanggan'] ?></td>
      <td><?php echo $p['nama_teknisi'] ?></td>
            <td><a href="manager_edit.php?id=<?php echo $p['id'] ?>" name="btn-edit" onClick='return confirm("Yakin Ingin Mengedit Data?");'>Edit</a> | <a href="manager_hapus_pelanggan.php?id=<?php echo $p['id'] ?>" name="btn-edit" onClick='return confirm("Yakin Ingin Menghapus Data?");'>Delete</a></td>
           <?php /* <td><a href="ag_hapus.php?id_ag=<?php echo $data['id_ag'] ?>" name="btn-hapus" onClick='return confirm("Yakin ingin menghapus data?");'>Hapus</a></td> */ ?>
<?php echo "</tr>";
       }
?>
</tbody>
</table>
