<?php
session_start();
if($_SESSION['status']!=8)
 header("Location: ./index.php");
 ?>
