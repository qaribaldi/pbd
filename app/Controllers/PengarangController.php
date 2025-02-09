<?php

namespace App\Controllers;

use App\Models\PengarangModel;
use CodeIgniter\Controller;

class PengarangController extends Controller
{
    protected $pengarangModel;

    public function __construct()
    {
        $this->pengarangModel = new PengarangModel();
    }

    // 📌 Menampilkan daftar pengarang
    public function index()
    {
        $data['pengarang'] = $this->pengarangModel->findAll(); // Mengambil semua data pengarang
        return view('/pengarang/tampilPengarang', $data);
    }

    // 📌 Menampilkan form tambah pengarang
    public function create()
    {
        return view('/pengarang/tambahPengarang');
    }

    // 📌 Menyimpan pengarang baru ke database
    public function store()
    {
        $this->pengarangModel->insert([
            'Id_pengarang' => $this->request->getPost('id_pengarang'),
            'Nama_pengarang' => $this->request->getPost('nama_pengarang'),
        ]);

        return redirect()->to(base_url('tampil_pengarang'))->with('success', 'Pengarang berhasil ditambahkan!');
    }

    // 📌 Menampilkan form edit pengarang dengan data yang sudah ada
    public function edit($id)
    {
        $data['pengarang'] = $this->pengarangModel->find($id);

        if (!$data['pengarang']) {
            return redirect()->to(base_url('tampil_pengarang'))->with('error', 'Pengarang tidak ditemukan!');
        }

        return view('/pengarang/editPengarang', $data);
    }

    // 📌 Menyimpan perubahan Pengarang ke database
    public function update($id)
    {
        $this->pengarangModel->update($id, [
            'Nama_pengarang' => $this->request->getPost('nama_pengarang'),
        ]);

        return redirect()->to(base_url('tampil_pengarang'))->with('success', 'Pengarang berhasil diperbarui!');
    }

    // 📌 Menghapus pengarang dari database
    public function delete($id)
    {
        $this->pengarangModel->delete($id);
        return redirect()->to(base_url('tampil_pengarang'))->with('success', 'Pengarang berhasil dihapus!');
    }
}
