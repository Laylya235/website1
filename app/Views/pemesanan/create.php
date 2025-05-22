<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h3>Tambah Pemesanan</h3>

    <?php if(session()->get('errors')): ?>
        <div class="alert alert-danger">
            <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>

    <form action="/pemesanan/store" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label>No RM</label>
            <input type="text" name="no_rm" class="form-control" value="<?= old('no_rm') ?>">
        </div>
        <div class="mb-3">
            <label>Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" value="<?= old('nama_pasien') ?>">
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jk_kelamin" class="form-select">
                <option value="">Pilih</option>
                <option value="laki - laki" <?= old('jk_kelamin') == 'laki - laki' ? 'selected' : '' ?>>Laki - laki</option>
                <option value="perempuan" <?= old('jk_kelamin') == 'perempuan' ? 'selected' : '' ?>>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control" value="<?= old('umur') ?>">
        </div>
        <div class="mb-3">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" class="form-control" value="<?= old('tanggal_masuk') ?>">
        </div>
        <div class="mb-3">
            <label>Status Pasien</label>
            <select name="status_px" class="form-select">
                <option value="">Pilih</option>
                <option value="dirawat" <?= old('status_px') == 'dirawat' ? 'selected' : '' ?>>Dirawat</option>
                <option value="selesai" <?= old('status_px') == 'selesai' ? 'selected' : '' ?>>Selesai</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Cara Bayar</label>
            <input type="text" name="cara_bayar" class="form-control" value="<?= old('cara_bayar') ?>">
        </div>
        <div class="mb-3">
            <label>Cara Keluar</label>
            <input type="text" name="cara_keluar" class="form-control" value="<?= old('cara_keluar') ?>">
        </div>
        <div class="mb-3">
            <label>ID Bangsal</label>
            <input type="number" name="id_bangsal" class="form-control" value="<?= old('id_bangsal') ?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/pemesanan" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
