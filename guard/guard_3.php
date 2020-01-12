<?php
session_start();
if($_SESSION['status']!=3)
 header("Location: ./index.php");
 ?>
