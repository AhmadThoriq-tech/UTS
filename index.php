<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kalibrasi</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Data Kalibrasi Alat</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Data</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Alat</th>
                <th>Nomor Seri</th>
                <th>Tanggal Kalibrasi</th>
                <th>Hasil</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM alat_kalibrasi");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama_alat']}</td>
                <td>{$row['nomor_seri']}</td>
                <td>{$row['tanggal_kalibrasi']}</td>
                <td>{$row['hasil_kalibrasi']}</td>
                <td>{$row['status']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}' class='btn btn-sm btn-warning'>Edit</a>
                    <a href='hapus.php?id={$row['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Yakin hapus data?\")'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
