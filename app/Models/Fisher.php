<?php

namespace App\Models;

use CodeIgniter\Model;

class Fisher extends Model
{
    protected $table = 'point';
    protected $primaryKey = 'IDpoint';
    protected $allowedFields = ['IDpoint', 'id_user', 'Esport', 'Badminton', 'Football', 'Pim_Pong', 'Running'];

    public function getAllParticipants()
    {
        return $this->orderBy('rank', 'ASC')->findAll(); // Urutkan berdasarkan ranking
    }
    public function getUserPointBySport($id_user, $typeSport)
    {
        return $this->where('id_user', $id_user)
                    ->select($typeSport) // Misal 'Esport', 'Badminton', dll
                    ->first();
    }
}
