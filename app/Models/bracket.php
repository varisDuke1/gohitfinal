<?php
namespace App\Models;
use CodeIgniter\Model;
class bracket extends Model
{
    protected $table = 'bracket';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_event',
        'peserta1', 'peserta2', 'peserta3', 'peserta4',
        'peserta5', 'peserta6', 'peserta7', 'peserta8',
        'peserta9', 'peserta10', 'peserta11', 'peserta12',
        'peserta13', 'peserta14', 'peserta15', 'peserta16',
        'peserta17', 'peserta18', 'peserta19', 'peserta20',
        'peserta21', 'peserta22', 'peserta23', 'peserta24',
        'peserta25', 'peserta26', 'peserta27', 'peserta28',
        'peserta29', 'peserta30', 'peserta31', 'peserta32'
    ];
}
