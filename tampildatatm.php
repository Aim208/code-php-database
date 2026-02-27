<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku Tamu</title>
</head>
<body>
    <h2>Daftar Pengunjung</h2>
    <a href="Tambahbktamu.php">[+] Tambah Data Baru</a><br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr bgcolor="#eee">
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. Telp</th>
            <th>Pesan</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>

        <?php
        $sql   = "SELECT * FROM tabeltamu1 ORDER BY id DESC";
        $query = mysqli_query($koneksi, $sql);

        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['nama_tamu']; ?></td>
            <td><?php echo $data['alamat_tamu']; ?></td>
            <td><?php echo $data['notelp_tamu']; ?></td>
            <td><?php echo $data['pesan_tamu']; ?></td>
            <td><?php echo $data['tanggal_bertamu']; ?></td>
            <td>
                <a href="tampildatatm.php?id=<?php echo $data['id']; ?>">Edit</a> | 
                <a href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>