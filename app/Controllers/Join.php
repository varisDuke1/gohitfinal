<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Peserta;
use App\Models\MyEventMod;

class Join extends BaseController
{
    public function join()
    {
        $session = session();
        $namaPengguna = $session->get('id');
        $db = \Config\Database::connect();
        $MyEvent = new MyEventMod();

        $id_event = $this->request->getPost("idevent");
        $id_user = $this->request->getPost("iduser");

        $selectedevent = $MyEvent->where('id_event', $id_event)->findAll();

        // Ambil tambahan user (jika ada), default null
        $id_user1 = $this->request->getPost('id_user1') ?: '';
        $id_user2 = $this->request->getPost('id_user2') ?: '';
        $id_user3 = $this->request->getPost('id_user3') ?: '';
        $id_user4 = $this->request->getPost('id_user4') ?: '';


        // Cek apakah user utama sudah terdaftar
        $existingRecord = $db->table('peserta')
            ->where('id_event', $id_event)
            ->where('id_user', $id_user)
            ->get()
            ->getRow();

        if ($existingRecord) {
            echo '<script>
                alert("Anda sudah terdaftar dalam acara ini!");
                window.location="' . base_url('/') . '"
            </script>';
            return;
        }

        // Cek jumlah peserta event
        $participantCount = $db->table('peserta')
            ->where('id_event', $id_event)
            ->countAllResults();

        if ($participantCount >= $selectedevent[0]['participant']) {
            echo '<script>
                alert("Maaf, acara ini sudah mencapai batas peserta maksimal.");
                window.location="' . base_url('/') . '"
            </script>';
            return;
        }

        // Simpan data peserta
        $model = new Peserta();
        $data = [
            'id_event'  => $id_event,
            'id_user'   => $namaPengguna,
            'id_user1'  => $id_user1,
            'id_user2'  => $id_user2,
            'id_user3'  => $id_user3,
            'id_user4'  => $id_user4,
        ];
        $model->saveuser($data);

        echo '<script>
            alert("Selamat! Berhasil Menambah Data ");
            window.location="' . base_url('/') . '"
        </script>';
    }
}
