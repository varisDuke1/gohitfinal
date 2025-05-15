<?php

namespace App\Models;

use CodeIgniter\Model;

class Peserta extends Model
{
    protected $table = 'peserta';

    protected $allowedFields = ['id_event', 'id_user','idd','id_user1','id_user2','id_user3','id_user4'];

    public function saveuser($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function showuser($idevent)
    {
        return $this->where('id_event', $idevent)->first();
    }
}
