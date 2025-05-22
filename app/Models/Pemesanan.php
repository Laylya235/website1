<?php namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model {
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $allowedFields = [
        'no_rm', 'nama_pasien', 'jk_kelamin', 'umur', 'tanggal_masuk',
        'status_px', 'tanggal_keluar', 'cara_bayar', 'cara_keluar', 'id_bangsal'
    ];
}