<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="info">

        <div class="sidebar-wrapper" style="background-color:red">
            <div class="logo">
                <h2 style="color:white"><center> Telkom Witel Sidoarjo </center></h2>
            </div>

            <ul class="nav">
                <li <?php if(isset($page) && $page == 1): echo "class='active'"; endif ?>>
                    <a href="ag_index.php">
                        <i class="ti-panel"></i>
                        <p>Login Admin Agency</p>
                    </a>
                </li>
                <li <?php if(isset($page) && $page == 2): echo "class='active'"; endif ?>>
                    <a href="spv_index.php">
                        <i class="ti-panel"></i>
                        <p>Login Supervisor</p>
                    </a>
                </li>
                <li <?php if(isset($page) && $page == 3): echo "class='active'"; endif ?>>
                    <a href="sf_index.php">
                        <i class="ti-panel"></i>
                        <p>Login sales force</p>
                    </a>
                </li>
                <li <?php if(isset($page) && $page == 4): echo "class='active'"; endif ?>>
                    <a href="inputer_index.php">
                        <i class="ti-panel"></i>
                        <p>Login Inputer</p>
                    </a>
                </li>
                <li <?php if(isset($page) && $page == 5): echo "class='active'"; endif ?>>
                    <a href="teknisi_index.php">
                        <i class="ti-panel"></i>
                        <p>Login Teknisi</p>
                    </a>
                </li>
                <li <?php if(isset($page) && $page == 6): echo "class='active'"; endif ?>>
                    <a href="tl_index.php">
                        <i class="ti-panel"></i>
                        <p>Login TL </p>
                    </a>
                </li>
                <li <?php if(isset($page) && $page == 7): echo "class='active'"; endif ?>>
                    <a href="woc_index.php">
                        <i class="ti-panel"></i>
                        <p>Login WOC</p>
                    </a>
                </li>
                <li <?php if(isset($page) && $page == 8): echo "class='active'"; endif ?>>
                    <a href="manager_index.php">
                        <i class="ti-panel"></i>
                        <p>Login Manager</p>
                    </a>
                </li>
                <li <?php if(isset($page) && $page == 9): echo "class='active'"; endif ?>>
                    <a href="picwitel_index.php">
                        <i class="ti-panel"></i>
                        <p>Login PIC Witel</p>
                    </a>
                </li>
                <li <?php if(isset($page) && $page == 10): echo "class='active'"; endif ?>>
                    <a href="kasto_index.php">
                        <i class="ti-panel"></i>
                        <p>Login Ka STO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
