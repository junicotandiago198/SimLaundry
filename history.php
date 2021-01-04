<?php 
session_start();
if (!isset($_SESSION['email']) and !isset($_SESSION['password'])) {
    include "tamplate/header.php";
 } else {
    include "tamplate/header_login.php";
 }  
include "pages/history.php";
include "tamplate/footer.php";
?>