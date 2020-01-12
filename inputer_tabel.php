<table class="table table-hover">
    <thead>
            <th>Track ID</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>No KTP</th>
            <th>STO</th>
            <th>Second CP</th>
            <th>Paket</th>
            <th>Tagging Rill</th>
            <th>ODP</th>
            <th>Jarak ODP ke Pelanggan</th>
            <th>Tanggal Input Data</th>
            <th>Agency</th>
            <th>ID Partner</th>
            <th>No SC</th>
            <th>SPV</th>
            <th>Status Validasi</th>
            <th>Ketegori Progress PSB</th>
            <th>Keterangan Progress PSB</th>
            <th>Alamat Rill Pelanggan</th>
            <th>CP Rill Pelanggan</th>
            <th>Nama Teknisi</th>
            <th colspan="2">Action</th>
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
            <td><?php echo $data['agency'] ?></td>
            <td><?php echo $data['id_partner'] ?></td>
            <td><?php echo $data['no_sc'] ?></td>
            <td><?php echo $data['spv'] ?></td>
            <td><?php echo $data['status_validasi'] ?></td>
            <td><?php echo $data['kategori_progress_psb'] ?></td>
            <td><?php echo $data['keterangan_progress_psb'] ?></td>
            <td><?php echo $data['alamat_rill_pelanggan'] ?></td>
            <td><?php echo $data['cp_rill_pelanggan'] ?></td>
            <td><?php echo $data['nama_teknisi'] ?></td>
            <td><a href="inputer_edit.php?track_id=<?php echo $data['track_id'] ?>" name="btn-edit" onClick='return confirm("Yakin ingin meng-edit data?");'>Edit</a></td>
           <?php /* <td><a href="ag_hapus.php?id_ag=<?php echo $data['id_ag'] ?>" name="btn-hapus" onClick='return confirm("Yakin ingin menghapus data?");'>Hapus</a></td> */ ?>
<?php echo "</tr>";
       }
?>
</tbody>
</table>
