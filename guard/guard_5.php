<?php
session_start();
if($_SESSION['status']!=5)
 header("Location: ./index.php");
 ?>
