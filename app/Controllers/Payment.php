<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\TradeModel;

class Payment extends BaseController
{
    public function addTransaction()
    {
        $session = session();
        $user = new User();
        
        $namaPengguna = $session->get('id');
        $sub = $session->get('sub');
        
        $db = \Config\Database::connect();
        $db->table('user')->where('id_user', $namaPengguna,)->update(['sub' =>1]);
        
        echo '<script>
            alert("Selamat! Berhasil Menambah Data ");
            window.location="' . base_url('/') . '"
        </script>';
    }
    public function addTransaction1()
    {
        $session = session();
        $user = new User();
        
        $namaPengguna = $session->get('id');
        $sub = $session->get('sub');
        
        $db = \Config\Database::connect();
        $db->table('user')->where('id_user', $namaPengguna,)->update(['sub' => 2]);
        
        echo '<script>
            alert("Selamat! Berhasil Menambah Data ");
            window.location="' . base_url('/') . '"
        </script>';
    }
    public function addTransaction2()
    {
        $session = session();
        $user = new User();
        
        $namaPengguna = $session->get('id');
        $sub = $session->get('sub');
        
        $db = \Config\Database::connect();
        $db->table('user')->where('id_user', $namaPengguna,)->update(['sub' => 3]);
        
        echo '<script>
            alert("Selamat! Berhasil Menambah Data ");
            window.location="' . base_url('/') . '"
        </script>';
    }
}