<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user'; // Primary key tabel penggunana
    protected $allowedFields = [
    'nama', 'nickname', 'phone', 'address', 'email', 'country', 'photo', 'serti', 'password', 'setuju'
    ];


    public function getuser($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function saveuser($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
    public function getUserById($id)
    {
        return $this->where('id_user', $id)->first();
    }
}
