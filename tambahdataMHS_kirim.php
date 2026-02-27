<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama   = $_POST['nama'];
$nim    = $_POST['nim'];
$alamat = $_POST['alamat'];

// menginput data ke database
$sql = "insert into mahas values('', '$nama', '$nim', '$alamat')";
mysqli_query($koneksi, $sql);

// mengalihkan halaman kembali ke index.php
header("location:tampildataMHS.php");
?>