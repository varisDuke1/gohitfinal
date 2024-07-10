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
}
