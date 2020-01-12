<?php
session_start();
if($_SESSION['status']!=4)
 header("Location: ./index.php");
 ?>
