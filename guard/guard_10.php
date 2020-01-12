<?php
session_start();
if($_SESSION['status']!=10)
 header("Location: ./index.php");
 ?>
