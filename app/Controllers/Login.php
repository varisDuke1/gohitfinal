<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\MyEventMod;
use App\Models\Eventm;

class Login extends BaseController
{
    protected $session;
    public function login()
    {
        $email = $this->request->getPost('username');
        $password = $this->request->getPost('pass');
        $userModel = new User();
        $user = $userModel->getUserByEmail($email);
        if (!is_null($user) && $user['email'] == $email && $user['password'] == $password) {
            // Login berhasil, simpan informasi pengguna ke dalam session
            $laa = "laa@gmail.com";
            if ($email == $laa) {
                $session = session();
                $session->set('id', $user['id_user']);
                return redirect()->to(base_url('/admin/dashboard'));
            }else{
                $session = session();
                $session->set('id', $user['id_user']);
                return redirect()->to(base_url('/'));
            }
        } else {
            echo "<script>alert('Email atau password salah.');</script>";
            echo "<script>window.location.href = '" . base_url('/login') . "';</script>";
            exit;
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
    public function profile()
    {
        $session = session();
        $userModel = new user();
        $namaPengguna = $session->get('id');
        
        if (!$session->has('id')) {
            $data = [
                'title' => 'Profile'
                
            ];
            echo view("home", $data);
        } else {
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'nama' => $user['nama'],
                'user'  => $user,
                'id' => $namaPengguna,
                'title' => 'Profile'
            ];
            echo view("profile", $data);
        }
    }
    public function update()
    {
        $session = session();
        $userId = $session->get('id');

        if (!$userId) {
            return redirect()->to('/login');
        }

        $userModel = new User();
        $user = $userModel->getUserById($userId);

        $data = [];

        // Ambil inputan form
        $name     = $this->request->getPost('name');
        $nickname = $this->request->getPost('nickname');
        $phone    = $this->request->getPost('phone');
        $address  = $this->request->getPost('address');
        $email    = $this->request->getPost('email');
        $country  = $this->request->getPost('country');

        if (!empty($name))     $data['nama']     = $name;
        if (!empty($nickname)) $data['nickname'] = $nickname;
        if (!empty($phone))    $data['phone']    = $phone;
        if (!empty($address))  $data['address']  = $address;
        if (!empty($email))    $data['email']    = $email;
        if (!empty($country))  $data['country']  = $country;

        // Password update
        $oldPassword     = $this->request->getPost('old_password');
        $newPassword     = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        if (!empty($oldPassword) || !empty($newPassword) || !empty($confirmPassword)) {
            if (empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
                return redirect()->back()->with('error', 'Semua kolom password harus diisi jika ingin mengubah password.');
            }

            // Tanpa hash (langsung dibandingkan nilai string)
            if ($oldPassword !== $user['password']) {
                return redirect()->back()->with('error', 'Password lama salah.');
            }

            if ($newPassword !== $confirmPassword) {
                return redirect()->back()->with('error', 'Konfirmasi password tidak cocok.');
            }

            $data['password'] = $newPassword; // Simpan langsung (tidak di-hash)
        }

        // Upload foto profil
        $photo = $this->request->getFile('photo');
        if ($photo && $photo->isValid() && !$photo->hasMoved()) {
            $photoName = $photo->getRandomName();
            $photo->move(ROOTPATH . 'public/assets/image', $photoName);
            $data['photo'] = $photoName;
        }

        // Upload sertifikat
        $serti = $this->request->getFile('serti');
        if ($serti && $serti->isValid() && !$serti->hasMoved()) {
            $sertiName = $serti->getRandomName();
            $serti->move(ROOTPATH . 'public/assets/serti', $sertiName);
            $data['serti'] = $sertiName;
            // Set kolom setuju = 'belum' hanya jika upload serti dilakukan
            $data['setuju'] = 'belum';
        }

        // Simpan jika ada data yang diubah
        if (!empty($data)) {
            $userModel->update($userId, $data);
            return redirect()->to('/profile')->with('success', 'Profil berhasil diperbarui.');
        } else {
            return redirect()->to('/profile')->with('info', 'Tidak ada data yang diubah.');
        }
    }
}
