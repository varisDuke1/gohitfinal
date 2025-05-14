<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Eventm;

class Tournament extends BaseController
{
    public function update()
    {
        $tournamentModel = new Eventm();

        $id = $this->request->getPost('id'); // ini harus id_event
        $data = [
            'title' => $this->request->getPost('title'),
            'type_sport' => $this->request->getPost('type_sport'),
            'date_column' => $this->request->getPost('date'),
            'time' => $this->request->getPost('time'),
            'participant' => $this->request->getPost('participant'),
            'location' => $this->request->getPost('location'),
            'organizer' => $this->request->getPost('organizer'),
            'Persetujuan' => $this->request->getPost('Persetujuan'),
            'Tingkatan'    => $this->request->getPost('Tingkatan'),
        ];

        $tournamentModel->lol($id, $data);

        return redirect()->to('/admin/turnamen/index');
    }
}
