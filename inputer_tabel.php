<table class="table table-hover table-bordered text-center">
    <thead style="background-color:lightgrey">
      <th class="text-center"><b>Track ID</b></th>
      <th class="text-center"><b>Nama Pelanggan</b></th>
      <th class="text-center"><b>Alamat</b></th>
      <th class="text-center"><b>No KTP</b></th>
      <th class="text-center"><b>STO</b></th>
      <th class="text-center"><b>Second CP</b></th>
      <th class="text-center"><b>Paket</b></th>
      <th class="text-center"><b>Tagging Rill</b></th>
      <th class="text-center"><b>ODP</b></th>
      <th class="text-center"><b>Tanggal Input Data</b></th>
      <th class="text-center"><b>Jarak ODP ke Pelanggan</b></th>
      <th class="text-center"><b>Agency</b></th>
      <th class="text-center"><b>ID Partner</b></th>
      <th class="text-center"><b>No SC</b></th>
      <th class="text-center"><b>SPV</b></th>
      <th class="text-center"><b>Status Validasi</b></th>
      <th class="text-center"><b>Ketegori Progress PSB</b></th>
      <th class="text-center"><b>Keterangan Progress PSB</b></th>
      <th class="text-center"><b>Alamat Rill Pelanggan</b></th>
      <th class="text-center"><b>CP Rill Pelanggan</b></th>
      <th class="text-center"><b>Nama Teknisi</b></th>
      <th colspan="2"><b>Action</b></th>
    </thead>
<tbody>
<?php
include("koneksi.php");
    $query = "SELECT * FROM data_pelanggan";
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
            <td><?php echo $data['id_agency'] ?></td>
            <td><?php echo $data['id_partner'] ?></td>
            <td><?php echo $data['no_sc'] ?></td>
            <td><?php echo $data['id_spv'] ?></td>
            <td><?php echo $data['status_validasi'] ?></td>
            <td><?php echo $data['kategori_progress_psb'] ?></td>
            <td><?php echo $data['keterangan_progress_psb'] ?></td>
            <td><?php echo $data['alamat_rill_pelanggan'] ?></td>
            <td><?php echo $data['cp_rill_pelanggan'] ?></td>
            <td><?php echo $data['nama_teknisi'] ?></td>
            <td><a href="inputer_edit.php?id=<?php echo $data['id'] ?>" name="btn-edit" onClick='return confirm("Yakin ingin meng-edit data?");'>Edit</a></td>
           <?php /* <td><a href="ag_hapus.php?id_ag=<?php echo $data['id_ag'] ?>" name="btn-hapus" onClick='return confirm("Yakin ingin menghapus data?");'>Hapus</a></td> */ ?>
<?php echo "</tr>";
       }
?>
</tbody>
</table>
