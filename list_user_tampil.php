<?php
include("header.php");
require("koneksi.php");
?>
<body>

<?php
include("sidebar/sidebar_list_user.php"); ?>
    <div class="main-panel">
        <!-- <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"
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
                                <h2 class="title text-center"><b>List User</b></h2>
                            </div>

                            <div class="content">
                              <div class="table-responsive">
                                  <?php include("list_user_tabel.php"); ?>
                              </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>



        </div>
</body>