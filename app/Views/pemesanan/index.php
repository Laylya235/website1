<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Daftar Pemesanan</h3>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif ?>

    <a href="/pemesanan/create" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No RM</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Tanggal Masuk</th>
                <th>Status Pasien</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pemesanan as $row): ?>
            <tr>
                <td><?= esc($row['no_rm']) ?></td>
                <td><?= esc($row['nama_pasien']) ?></td>
                <td><?= esc($row['jk_kelamin']) ?></td>
                <td><?= esc($row['umur']) ?></td>
                <td><?= esc($row['tanggal_masuk']) ?></td>
                <td><?= esc($row['status_px']) ?></td>
                <td>
                    <a href="/pemesanan/edit/<?= $row['id_pemesanan'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/pemesanan/delete/<?= $row['id_pemesanan'] ?>" method="post" style="display:inline;" onsubmit="return confirm('Yakin ingin hapus?')">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE" />
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
