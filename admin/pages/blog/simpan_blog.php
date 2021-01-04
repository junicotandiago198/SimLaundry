<?php 
include "../../lib/koneksi.php";

$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['gambar'];

mysqli_query ($koneksi,"INSERT INTO tb_blog VALUES ('', '$tanggal', '$nama', '$deskripsi', '$gambar')");
header('location:main.php');

?>