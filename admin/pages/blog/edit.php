<?php 
include "../../lib/koneksi.php";

$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['gambar'];

mysqli_query($koneksi,"UPDATE tb_blog SET tanggal='$tanggal', nama_blog='$nama', deskripsi='$deskripsi', gambar='$gambar' WHERE id_blog='$id'");
header("location:main.php");

?>