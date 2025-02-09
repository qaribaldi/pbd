<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function registerView()
    {
        if (session()->get('logged_in')) {


            return redirect()->to('/peminjaman');
        }
        return view("auth/register");
    }
    public function register()
    {
        $id = $this->request->getPost("Id_admin");
        $password = $this->request->getPost("password");
        $nama = $this->request->getPost("nama");
        $alamat = $this->request->getPost("alamat");

        try {
            $register = $this->adminModel->register($id, $password, $nama, $alamat);


            if (!$register) {
                session()->setFlashdata('pendaftaran_berhasil', 'Pendaftaran berhasil!');
                return redirect()->to('/login');
            } else {
                session()->setFlashdata('error', 'Pendaftaran gagal! Username sudah digunakan atau terjadi kesalahan.');
                return redirect()->to('/register');
            }
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            if (strpos($e->getMessage(), '1062') !== false) {
                session()->setFlashdata('error', 'Pendaftaran gagal! Username sudah digunakan.');
            } else {
                session()->setFlashdata('error', 'Pendaftaran gagal! Username sudah digunakan.');
            }
            return redirect()->to(base_url('login'));
        }
    }

    public function loginView()
    {

        if (session()->get('logged_in')) {


            return redirect()->to('/peminjaman');
        }
        return view('auth/login');
    }

    public function login()
    {
        $id = $this->request->getPost('Id_admin');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan username

        $user = $this->adminModel->getUserByUsername($id);


        // Jika user tidak ditemukan atau password salah
        if (!$user || !password_verify($password, $user['password'])) {
            session()->setFlashdata('error', 'Username atau password salah.');
            return redirect()->to('/login');
        }

        // Jika login berhasil, set session
        session()->set([
            'user_id'    => $user['Id_admin'],
            'nama'   => $user['Nama_anggota'],
            'logged_in'  => true
        ]);
        session()->setFlashdata('login_berhasil', 'Login anda berhasil');

        // Redirect ke halaman dashboard atau halaman utama
        return redirect()->to(base_url('peminjaman'));
    }

    public function logout()
    {
        // Hapus session untuk logout
        session()->destroy();

        return redirect()->to(base_url('login'));
    }
}
