<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\MyEventMod;
use App\Models\Eventm;
use CodeIgniter\RESTful\ResourceController;

class Login_api extends ResourceController
{
    protected $session;

    public function login()
    {
        $userModel = new User();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            return $this->respond(['status' => 'success', 'message' => 'Login successful']);
        } else {
            return $this->respond(['status' => 'error', 'message' => 'Invalid credentials']);
        }
    }

    public function logout()
    {
        // Hapus informasi pengguna dari session saat logout
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function add()
    {
        $model = new User();
        $nama = $this->request->getPost("nama");
        $email = $this->request->getPost("email");
        $password = $this->request->getPost("password");
        $retypePassword = $this->request->getPost("repass"); // Added line to get re-typed password

        // Check if passwords match
        if ($password !== $retypePassword) {
            echo '<script>
                alert("Password tidak cocok. Silakan coba lagi.");
                window.location="' . base_url('/reg') . '"
            </script>';
            exit;
        }

        // If passwords match, proceed with creating the new user
        $data = array(
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'jenis' => "1",
            'sub'=>"1"
        );
        $model->saveuser($data);

        echo '<script>
            alert("Selamat! Berhasil Menambah Data ");
            window.location="' . base_url('/login') . '"
        </script>';
    }
}
