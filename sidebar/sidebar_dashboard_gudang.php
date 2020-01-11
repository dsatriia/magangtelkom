<?php	
require("koneksi.php");
?>
<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="info">

        <div class="sidebar-wrapper">
            <div class="logo">
                <h2><center> Telkom Witel Sidoarjo </center></h2>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard_gudang.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li >
                    <a href="barang_tampil.php">
                        <i class="ti-view-list-alt"></i>
                        <p>Data Pelanggan</p>
                    </a>
                </li>
                <li >
                    <a href="logout.php" onClick='return confirm("Yakin ingin keluar?");'>
                        <i class="ti-panel"></i>
                        <p>Logout</p>
                    </a>
                </li>                
            </ul>
        </div>
    </div>