<?php

namespace App\Models;

use CodeIgniter\Model;

class Eventm extends Model
{
    protected $table = 'event';
    protected $primaryKey = 'id_event';
    protected $allowedFields = [
        'title', 'type_sport', 'date_column', 'time',
        'participant', 'location', 'organizer', 'Persetujuan', 'Tingkatan', 'NOT', 'Status_Acak'
    ];
    public function saveuser($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function lol($id, $data)
    {
        return $this->update($id, $data); // otomatis pakai $primaryKey ('id_event')
    }
    public function StatusAcak($id, $data)
    {
        return $this->where('id_event', $id)
            ->update('Status_Acak', $data); // Misal 'Esport', 'Badminton', dll
    }
}
