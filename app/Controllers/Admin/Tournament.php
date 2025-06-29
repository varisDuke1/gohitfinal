<?php

namespace App\Controllers\Admin;
use App\Models\MyEventMod;
use App\Models\log;
use App\Models\User;

use App\Controllers\BaseController;

class Tournament extends BaseController
{
    public function index()
    {
        $customerModel = new MyEventMod();
        $turney['tournament']=$customerModel->findAll();

        return view('admin/turnamen/index', $turney);
    }
    public function Log()
    {
        $db = \Config\Database::connect(); // Koneksi ke database
        $builder = $db->table('log');
        $builder->select('log.*, user.nama');
        $builder->join('user', 'user.id_user = log.id_user');
        $query = $builder->get();
        
        $turney['tournament'] = $query->getResultArray(); // Ambil hasil dalam bentuk array

        return view('admin/turnamen/Log', $turney);
    }
}