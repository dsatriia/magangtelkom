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
      <th rowspan="2" class="text-center"><b>ID Partner</b></th>
      <th rowspan="2" class="text-center"><b>No SC</b></th>
      <th rowspan="2" class="text-center"><b>SPV</b></th>
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
    $id_spv = $_SESSION['id'];

    //mencari data id_admingency dari spv yg sedang login
    $queryCariAg = "SELECT * FROM `supervisor` WHERE `id_supervisor` = $id_spv";
    $runQueryCariAg = mysqli_query($con,$queryCariAg);

    $dataSpv = mysqli_fetch_assoc($runQueryCariAg);
    $id_ag = $dataSpv["id_agency"];
    // end
    if ($id_ag == 0){
      $query = "SELECT * FROM data_pelanggan WHERE id_spv = $id_spv";
    } else {
      $query = "SELECT * FROM data_pelanggan WHERE id_agency = $id_ag";
    }
 

   // $query2 = "SELECT * FROM data_pelanggan WHERE id_spv = $id";
    $hasil = mysqli_query($con,$query);
   // $hasil2 = mysqli_query($con,$query2);
   if ($hasil){
    while ($data = mysqli_fetch_array($hasil)){
      echo "<tr>"; ?>
              <td><?php echo $data['track_id'] ?></td>
              <td><?php echo $data['nama_pelanggan'] ?></td>
              <td><?php echo $data['alamat'] ?></td>
              <td><?php echo $data['ktp'] ?></td>
              <td><?php echo $data['sto'] ?></td>
              <td><?php echo $data['second_cp'] ?></td>
              <td><?php echo $data['paket'] ?></td>
              <td><?php echo $data['tagging_rill'] ?></td>
              <td><?php echo $data['odp'] ?></td>
              <td><?php echo $data['odp_ke_pelanggan'] ?></td>
              <td><?php echo $data['tgl_input'] ?></td>
              <td><?php
  
                if ($data['id_agency'] == 0){
                  $agency = 'Belum ada Admin Agency';
                } else {
                  $id_agency = $data['id_agency'];
                  $query_agency = "SELECT nama FROM agency WHERE id_agency = $id_agency";
                  $run_agency = mysqli_query($con, $query_agency);
                  $hasil_agency = mysqli_fetch_array($run_agency);
                  $agency = $hasil_agency['nama'];
                }
                echo $agency ?>
  
              </td>
              <td>
                <?php
  
                if ($data['id_partner'] == 0){
                  $partner = 'Belum ada Sales Force';
                }else {
                  $id_partner = $data['id_partner'];
                  $query_partner = "SELECT nama FROM salesforce WHERE id_salesforce = $id_partner";
                  $run_partner = mysqli_query($con, $query_partner);
                  $hasil_partner = mysqli_fetch_array($run_partner);
                  $partner = $hasil_partner['nama'];
                }
  
                echo $partner?>
              </td>
              <td><?php echo $data['no_sc'] ?></td>
              <td>
  
              <?php
              if ($data['id_spv'] == 0){
                $spv = 'Belum ada Supervisor';
              } else {
                $id_supervisor = $data['id_spv'];
                $query_supervisor = "SELECT nama FROM supervisor WHERE id_supervisor = $id_supervisor";
                $run_supervisor = mysqli_query($con, $query_supervisor);
                $hasil_supervisor = mysqli_fetch_array($run_supervisor);
                $supervisor = $hasil_supervisor['nama'];
              }
  
              echo $supervisor ?>
              </td>
              <td><?php echo $data['status_validasi'] ?></td>
              <td><?php echo $data['kategori_progress_psb'] ?></td>
              <td><?php echo $data['keterangan_progress_psb'] ?></td>
              <td><a href="spv_edit.php?id=<?php echo $data['id'] ?>" name="btn-edit" onClick='return confirm("Yakin ingin meng-edit data?");'>Edit</a></td>
             <?php /* <td><a href="ag_hapus.php?id_ag=<?php echo $data['id_ag'] ?>" name="btn-hapus" onClick='return confirm("Yakin ingin menghapus data?");'>Hapus</a></td> */ ?>
  <?php echo "</tr>";
         }  
   }
    
?>
</tbody>
</table>
