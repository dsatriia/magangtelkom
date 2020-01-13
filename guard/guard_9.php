<?php
session_start();
if($_SESSION['status']!=9)
 header("Location: ./index.php");
 ?>
