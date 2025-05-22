<?php namespace App\Models;

use CodeIgniter\Model;

class BangsalModel extends Model {
    protected $table = 'bangsal';
    protected $primaryKey = 'id_bangsal';
    protected $allowedFields = ['ruang', 'no_bangsal', 'status'];
}