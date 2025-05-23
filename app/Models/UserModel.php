<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];
    protected $useTimestamps = false;
    public function getUserByUsername($username){
        return $this->where('username', $username)->first();
    }
}