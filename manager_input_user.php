<?php
require("koneksi.php");
include("header.php");
?>
<body>
<?php
$id = $_SESSION['id'];

//option untuk menampilkan seluruh akses
$queryAkses = "SELECT * FROM `jabatan`";
$runQueryAkses = mysqli_query($con,$queryAkses);
$kumpulanDataAkses = [];
while ($dataAkses = mysqli_fetch_assoc($runQueryAkses)) {
    $kumpulanDataAkses[] = $dataAkses;
}
// end

//option untuk menampilkan seluruh sto
$querySto = "SELECT id_sto, area FROM `sto`";
$runQuerySto = mysqli_query($con,$querySto);
$kumpulanDataSto = [];
while ($dataSto = mysqli_fetch_assoc($runQuerySto)) {
    $kumpulanDataSto[] = $dataSto;
}
// end
?>

<?php include("sidebar/sidebar_list_manager.php"); ?>
<div class="main-panel">
    <!-- <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" style="font-size:18pt">List User</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                          <h2 class="title text-center"><b>Tambah User Baru</b></h2>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                            <table class="table table-hover">


                <!-- <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="header">
                            <p class="title" style="font-size:18pt; text-align:center"><b>Tambah User Baru</b></p>
                        </div>
                        <div class="content table-responsive table-full-width"> -->
                            <main>
<div class="container">
<div>

            <form method="post" action="manager_simpan_user.php">
                <div class="col-md-4">
                        <div class="form-group">
                            <label>Kode ID</label>
                            <input type="text" class="form-control border-input" name="username" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control border-input" name="password" autocomplete="off" required>
                        </div>
                        <div class='form-group'>
                            <label>Jabatan</label>
                                <select class="form-control border-input" name="akses" autocomplete="off" required>
                                  <option value="">Pilih Jabatan</option>
                                <?php foreach($kumpulanDataAkses as $akses) : ?>
                                    <option value="<?=$akses['id_jabatan'] ?> "><?= $akses['nama_jabatan'] ?></option>
                                <?php endforeach ?>
                                </select>
                        </div>

                        <div class="form-group">
                            <label>STO</label>
                            <select class="form-control border-input" name="id_sto" autocomplete="off" required>
                              <option value="">Pilih STO</option>
                            <?php foreach($kumpulanDataSto as $id_sto) : ?>
                                <option value="<?=$id_sto['id_sto'] ?> "><?= $id_sto['area'] ?></option>
                            <?php endforeach ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control border-input" name="nama" autocomplete="off" required>
                        </div>


                <div>
                <button type="submit" class="btn btn-info" name='btn-save'>Simpan</button>
                </div>
            </form>
		</div>
	</div>
</main>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
<?php include("footer.php"); ?>
