<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama','nip','password'];

    public function add($data)
    {
        $this->db->table('users')->insert($data);
    }

    public function login_user($email, $password)
    {
        return $this->db->table('users')->where([
            'email' => $email,
            'password' => $password,
        ])->get()->getRowArray();
    }
}
?>