<?php
include("header.php");
require("koneksi.php");
?>
<body>

<?php
include("sidebar/sidebar_list_manager.php"); ?>
    <div class="main-panel">


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title text-center"><b>List User</b></h2>
                            </div>

                            <div class="content">
                              <div class="table-responsive">
                                  <?php include("manager_tabel_list_user.php"); ?>
                              </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>



        </div>
</body>
