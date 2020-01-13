<table class="table table-hover table-bordered text-center">
    <thead>
      <th class="text-center">Track ID</th>
      <th class="text-center">Nama Pelanggan</th>
      <th class="text-center">Alamat</th>
      <th class="text-center">No KTP</th>
      <th class="text-center">STO</th>
      <th class="text-center">Second CP</th>
      <th class="text-center">Paket</th>
      <th class="text-center">Tagging Rill</th>
      <th class="text-center">ODP</th>
      <th class="text-center">Jarak ODP ke Pelanggan</th>
      <th class="text-center">Tanggal Input Data</th>
      <th class="text-center">Agency</th>
      <th class="text-center">ID Partner</th>
      <th class="text-center">No SC</th>
      <th class="text-center">SPV</th>
      <th class="text-center">Status Validasi</th>
      <th class="text-center">Ketegori Progress PSB</th>
      <th class="text-center">Keterangan Progress PSB</th>
      <th colspan="2">Action</th>
    </thead>
<tbody>
<?php






include("koneksi.php");
    $id = $_SESSION['id'];
    $query = "SELECT * FROM data_pelanggan WHERE id_agency = $id";    
    $hasil = mysqli_query($con,$query);
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
            <td><a href="ag_edit.php?id=<?php echo $data['id'] ?>" name="btn-edit" onClick='return confirm("Yakin ingin meng-edit data?");'>Edit</a></td>
           <?php /* <td><a href="ag_hapus.php?id_ag=<?php echo $data['id_ag'] ?>" name="btn-hapus" onClick='return confirm("Yakin ingin menghapus data?");'>Hapus</a></td> */ ?>
<?php echo "</tr>";
       }
?>
</tbody>
</table>
