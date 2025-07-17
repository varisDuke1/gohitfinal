<?php

namespace App\Controllers\Admin;
use \App\Models\User;
use App\Controllers\BaseController;

class Customer extends BaseController
{
    public function index()
    {
        $customerModel = new User();
        $rawCustomerData = $customerModel->findAll();

        // Tambahan perlindungan: pastikan setiap item memiliki key 'id'
        $sanitizedCustomerData = array_map(function ($cust) {
            if (!isset($cust['id'])) {
                $cust['id'] = null; // Atau isi dengan nilai default lainnya
            }
            return $cust;
        }, $rawCustomerData);

        $data['customer'] = $sanitizedCustomerData;

        return view('admin/customer/index', $data);
    }
    public function detailPoint($id_user)
    {
        $fisherModel = new \App\Models\Fisher();
        $point = $fisherModel->where('id_user', $id_user)->first();

        if (!$point) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Data tidak ditemukan']);
        }

        return $this->response->setJSON(['status' => 'success', 'data' => $point]);
    }

    public function verifikasi()
    {
        try {
            $id_user = $this->request->getPost('id_user');
            $modelUser = new \App\Models\User();
            $modelPoint = new \App\Models\Fisher();

            $point = $modelPoint->where('id_user', $id_user)->first();

            if ($point) {
                $newData = [
                    'Esport'    => (int)$point['Esport'] + (int)$this->request->getPost('add_esport'),
                    'Badminton' => (int)$point['Badminton'] + (int)$this->request->getPost('add_badminton'),
                    'FootBall'  => (int)$point['FootBall'] + (int)$this->request->getPost('add_football'),
                    'Pimpong'   => (int)$point['Pimpong'] + (int)$this->request->getPost('add_pimpong'),
                    'Running'   => (int)$point['Running'] + (int)$this->request->getPost('add_running')
                ];

                $modelPoint->update($point['IDpoint'], $newData);
                $modelUser->update($id_user, ['setuju' => 'Sudah']);
            }

            return redirect()->to('admin/customer/index')->with('message', 'Point berhasil diperbarui');

        } catch (\Throwable $e) {
            return $e->getMessage(); // sementara untuk debugging
        }
    }


}
