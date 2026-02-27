<?php
include('koneksi.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama_tamu'];
    $alamat = $_POST['alamat_tamu'];
    $notelp = $_POST['notelp_tamu'];
    $pesan = $_POST['pesan_tamu'];

    $sql = "UPDATE tabeltamu1 SET 
            nama_tamu='$nama', 
            alamat_tamu='$alamat', 
            notelp_tamu='$notelp', 
            pesan_tamu='$pesan' 
            WHERE id='$id'";

    if (mysqli_query($koneksi, $sql)) {
        header("location:Tampilandatatm.php?pesan=berhasil_update");
    } else {
        echo "Gagal Update: " . mysqli_error($koneksi);
    }
}
?>