<?php
include('koneksi.php');

if(isset($_POST['simpan'])){
    $id     = $_POST['id']; // Menangkap ID dari input hidden
    $nama   = $_POST['nama_tamu'];
    $alamat = $_POST['alamat_tamu'];
    $notelp = $_POST['notelp_tamu'];
    $pesan  = $_POST['pesan_tamu'];

    // Perintah merubah data
    $query = "UPDATE tabeltamu1 SET 
              nama_tamu='$nama', 
              alamat_tamu='$alamat', 
              notelp_tamu='$notelp', 
              pesan_tamu='$pesan' 
              WHERE id='$id'";

    $eksekusi = mysqli_query($koneksi, $query);

    if($eksekusi){
        echo "<script>alert('Berhasil merubah data!'); window.location='Tampilandatatm.php';</script>";
    } else {
        echo "Gagal merubah data: " . mysqli_error($koneksi);
    }
}
?>