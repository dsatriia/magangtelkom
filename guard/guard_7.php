<?php
session_start();
if($_SESSION['status']!=7)
 header("Location: ./index.php");
 ?>
