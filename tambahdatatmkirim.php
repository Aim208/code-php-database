<?php
include('koneksi.php');

if (isset($_POST['submit'])) {
    $nama   = $_POST['nama_tamu'];
    $alamat = $_POST['alamat_tamu'];
    $notelp = $_POST['notelp_tamu'];
    $pesan  = $_POST['pesan_tamu'];
    // Tanggal otomatis menggunakan fungsi NOW() di SQL
    
    $query = "INSERT INTO tabeltamu1 (nama_tamu, alamat_tamu, notelp_tamu, pesan_tamu, tanggal_bertamu) 
              VALUES ('$nama', '$alamat', '$notelp', '$pesan', NOW())";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data tamu berhasil disimpan!'); window.location='Tampilandatatm.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>