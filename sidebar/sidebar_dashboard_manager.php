<?php
require("koneksi.php");
?>
<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="info">

        <div class="sidebar-wrapper" style="background-color:red">
            <div class="logo">
                <h2 style="color:white"><center> Telkom Witel Sidoarjo </center></h2>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard_manager.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li >
                    <a href="manager_tampil_list_user.php">
                        <i class="ti-view-list-alt"></i>
                        <p>List User</p>
                    </a>
                </li>
                <li >
                    <a href="manager_tampil.php">
                        <i class="ti-view-list-alt"></i>
                        <p>Data Pelanggan</p>
                    </a>
                </li>
                <li >
                    <a href="logout.php" onClick='return confirm("Apakah Anda Yakin Ingin Keluar ?");'>
                        <i class="ti-panel"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
