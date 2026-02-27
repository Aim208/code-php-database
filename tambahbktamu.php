<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku Tamu</title>
</head>
<body>
    <h2>Form Isi Buku Tamu</h2>
    <form action="Tambahdatatmkirim.php" method="POST">
        <label>Nama Tamu:</label><br>
        <input type="text" name="nama_tamu" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat_tamu" required></textarea><br><br>

        <label>No. Telp:</label><br>
        <input type="text" name="notelp_tamu" required><br><br>

        <label>Pesan:</label><br>
        <textarea name="pesan_tamu" required></textarea><br><br>

        <button type="submit" name="submit">Kirim Data</button>
        <a href="Tampildatatm.php">Lihat Data</a>
    </form>
</body>
</html>