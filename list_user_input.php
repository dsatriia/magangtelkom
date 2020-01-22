<?php
require("koneksi.php");
include("header.php");
?>
<body>
<?php
$id = $_SESSION['id'];

//option untuk menampilkan seluruh akses
$queryAkses = "SELECT akses FROM `user`";
$runQueryAkses = mysqli_query($con,$queryAkses);
$kumpulanDataAkses = [];
while ($dataAkses = mysqli_fetch_assoc($runQueryAkses)) {
    $kumpulanDataAkses[] = $dataAkses;
}

// end
?>

<?php include("sidebar/sidebar_list_user.php"); ?>
<div class="main-panel">
    <nav class="navbar navbar-default">
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
    </nav>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">

                <div class="col-md-12">
                    <div class="card card-plain">
                        <div class="header">
                            <p class="title" style="font-size:18pt; text-align:center"><b>Tambah User Baru</b></p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <main>
<div class="container">
<div>

            <form method="post" action="list_user_simpan.php">
                <div class="col-md-4">                    
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control border-input" name="username" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control border-input" name="password" autocomplete="off" required>
                        </div>
                        <div class='form-group'>
                            <label>Akses</label>
                                <select class="form-control border-input" name="akses" autocomplete="off" required>
                                <?php foreach($kumpulanDataAkses as $akses) : ?>
                                    <option value="<?=$akses['id'] ?> "><?= $akses['akses'] ?></option>
                                <?php endforeach ?>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control border-input" name="nama" autocomplete="off" required>
                        </div>


                <div>
                <button type="submit" name='btn-save'>Simpan</button>
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
