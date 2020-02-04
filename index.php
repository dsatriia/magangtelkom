<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<?php include"header.php";?>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="info">

        <div class="sidebar-wrapper" style="background-color:red">
            <div class="logo">
                <h2 style="color:white"><center> Telkom Witel Sidoarjo </center></h2>
            </div>

            <ul class="nav">
                <li class='active'>
                    <a href="index.php">
                        <i class="ti-panel"></i>
                        <p>Login</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"></h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table">
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h2 class="title" style="text-align:center"><b>LOGIN</b></h2>
                                <br>
                                <p class="text-center" style="font-size:18pt">Silahkan Login Menggunakan Username
                                    dan Password Anda!</p>
                            </div>
                       	<div class="content table-responsive table-full-width">
                            <main>
                                <div class="container">
                                    <div>
                                        <br>
                                	    <form  method="post" action="login_utama.php">
                                            <div>
                                			    <label>Kode ID&emsp;&emsp;:</label>
                                				<input type="text" name="username" autocomplete="off" required>
                                		    </div>
                                			<div>
                                				<label>Password&emsp;:</label>
                                				<input type="password" name="password" autocomplete="off" required>
                                			<div>
                                			<div>
                                                <br>
                                                <button type="submit">Login</button>
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
    </div>
</div>
</body>
<?php include"footer.php"; ?>
