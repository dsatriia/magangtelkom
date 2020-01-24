<table class="table table-hover table-bordered">
    <thead style="background-color:lightgrey" >
      <th rowspan="2" class="text-center"><b>Nama</b></th>
      <th rowspan="2" class="text-center"><b>Username</b></th>
      <th rowspan="2" class="text-center"><b>Password</b></th>
      <th rowspan="2" class="text-center"><b>Email</b></th>
      <th rowspan="2" class="text-center"><b>Telpon</b></th>
      <th rowspan="2" class="text-center"><b>HP</b></th>
      <th rowspan="2" class="text-center"><b>STO</b></th>
      <th rowspan="2" class="text-center"><b>Agency</b></th>
      <th rowspan="2" class="text-center"><b>Regional</b></th>
      <th rowspan="2" class="text-center"><b>Witel</b></th>
      <th rowspan="2" class="text-center"><b>Datel</b></th>
      <th rowspan="2" class="text-center"><b>Tanggal Aktif</b></th>
      <th rowspan="2" class="text-center"><b>Jabatan</b></th>
      <th rowspan="2" class="text-center"><b>Action</b></th>
    </thead>
<tbody>
<?php
include("koneksi.php");
   // $id_kasto = $_SESSION['id_agency'];
    $query = "SELECT * FROM admin_agency";
    $hasil = mysqli_query($con,$query);
    while ($data = mysqli_fetch_array($hasil)){
    echo "<tr>"; ?>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['username'] ?></td>
            <td><?php echo $data['password'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['telpon'] ?></td>
            <td><?php echo $data['hp'] ?></td>
            <td><?php echo $data['sto'] ?></td>
            <td><?php echo $data['agency'] ?></td>
            <td><?php echo $data['regional'] ?></td>
            <td><?php echo $data['witel'] ?></td>
            <td><?php echo $data['datel'] ?></td>
            <td><?php echo $data['tanggal_aktif'] ?></td>
            <td><?php echo $data['jabatan'] ?></td>
            <td><a href="list_ag_hapus.php?id_admin_agency=<?php echo $data['id_admin_agency'] ?>" name="btn-delete" onClick='return confirm("Yakin Ingin Menghapus User?");'>Hapus</a></td>
           <?php /* <td><a href="ag_hapus.php?id_ag=<?php echo $data['id_ag'] ?>" name="btn-hapus" onClick='return confirm("Yakin ingin menghapus data?");'>Hapus</a></td> */ ?>
<?php echo "</tr>";
       }
?>
</tbody>
</table>
