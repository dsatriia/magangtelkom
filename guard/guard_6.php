<?php
session_start();
if($_SESSION['status']!=6)
 header("Location: ./index.php");
 ?>
