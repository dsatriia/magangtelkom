<table class="table table-hover table-bordered text-center">
  <thead style="background-color:lightgrey">
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
      <th rowspan="2" class="text-center"><b>Action</b></th>
      <tr>
          <th class="text-center"><b>Kategori</b></th>
          <th class="text-center"><b>Keterangan</b></th>
      </tr>
    </thead>
<tbody>
<?php

include("koneksi.php");
    $id = $_SESSION['id'];
    $query = "SELECT * FROM data_pelanggan WHERE id_admin_agency = $id";
    $hasil = mysqli_query($con,$query);
    while ($data = mysqli_fetch_array($hasil)){
    echo "<tr>"; ?>
            <td><?php echo $data['track_id'] ?></td>
            <td><?php echo $data['nama_pelanggan'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['ktp'] ?></td>
            <td><?php

              if ($data['id_sto'] == 0){
                $sto= 'Tidak Memiliki STO';
              } else {
                $id_sto = $data['id_sto'];
                $query_sto = "SELECT area FROM sto WHERE id_sto = $id_sto";
                $run_sto = mysqli_query($con, $query_sto);
                $hasil_sto = mysqli_fetch_array($run_sto);
                $sto = $hasil_sto['area'];
              }
              echo $sto ?>

            </td>
            <td><?php echo $data['second_cp'] ?></td>
            <td><?php

              if ($data['id_paket'] == 0){
                $paket = 'Tidak Memiliki Paket';
              } else {
                $id_paket = $data['id_paket'];
                $query_paket = "SELECT nama_paket FROM paket WHERE id_paket = $id_paket";
                $run_paket = mysqli_query($con, $query_paket);
                $hasil_paket = mysqli_fetch_array($run_paket);
                $paket = $hasil_paket['nama_paket'];
              }
              echo $paket ?>

            </td>
            <td><?php echo $data['tagging_rill'] ?></td>
            <td><?php echo $data['odp'] ?></td>
            <td><?php echo $data['odp_ke_pelanggan'] ?></td>
            <td><?php echo $data['tgl_input'] ?></td>
            <td><?php

              if ($data['id_agency'] == 0){
                $agency= 'Tidak Memiliki Agency';
              } else {
                $id_agency = $data['id_agency'];
                $query_agency = "SELECT nama_agency FROM agency WHERE id_agency = $id_agency";
                $run_agency = mysqli_query($con, $query_agency);
                $hasil_agency = mysqli_fetch_array($run_agency);
                $agency = $hasil_agency['nama_agency'];
              }
              echo $agency ?>
            </td>

            <td>
            <?php
            if ($data['id_supervisor'] == 0){
              $supervisor = 'Belum ada Supervisor';
            } else {
              $id_supervisor = $data['id_supervisor'];
              $query_supervisor = "SELECT nama FROM supervisor WHERE id_supervisor = $id_supervisor";
              $run_supervisor = mysqli_query($con, $query_supervisor);
              $hasil_supervisor = mysqli_fetch_array($run_supervisor);
              $supervisor = $hasil_supervisor['nama'];
            }

            echo $supervisor ?>
            </td>

            <td>
                    <?php
                    if ($data['id_salesforce'] == 0){
                      $salesforce = 'Belum ada Sales Force';
                    }else {
                      $id_salesforce = $data['id_salesforce'];
                      $query_salesforce = "SELECT nama FROM salesforce WHERE id_salesforce = $id_salesforce";
                      $run_salesforce = mysqli_query($con, $query_salesforce);
                      $hasil_salesforce = mysqli_fetch_array($run_salesforce);
                      $salesforce = $hasil_salesforce['nama'];
                    }

                    echo $salesforce?>
                  </td>

            <td><?php echo $data['no_sc'] ?></td>
            <td><?php echo $data['status_validasi'] ?></td>
            <td><?php echo $data['kategori_progress_psb'] ?></td>
            <td><?php echo $data['keterangan_progress_psb'] ?></td>
            <td><a href="ag_edit.php?id=<?php echo $data['id'] ?>" name="btn-edit" onClick='return confirm("Yakin Ingin Mengedit Data?");'>Edit</a></td>
           <?php /* <td><a href="ag_hapus.php?id_ag=<?php echo $data['id_ag'] ?>" name="btn-hapus" onClick='return confirm("Yakin ingin menghapus data?");'>Hapus</a></td> */ ?>
<?php echo "</tr>";
       }
?>
</tbody>
</table>
