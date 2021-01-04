<?php 
include "../../lib/koneksi.php";

$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM tb_blog WHERE id_blog = '$id'");
header("location:main.php");
?>