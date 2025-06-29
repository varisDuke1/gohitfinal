<?php
namespace App\Models;
use CodeIgniter\Model;
class log extends Model
{
    protected $table = 'log';
    protected $primaryKey = 'id_log';
    protected $allowedFields = ['id_event', 'id_user', 'Kategori', 'Point'
    ];
}
