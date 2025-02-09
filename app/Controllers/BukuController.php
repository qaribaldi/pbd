<?php

namespace App\Controllers;

use App\Models\BukuModel;
use App\Models\PengarangModel;
use App\Models\PenerbitModel;
use CodeIgniter\Controller;

class BukuController extends Controller
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    // 📌 Menampilkan daftar buku
    public function index()
    {
        $data['buku'] = $this->bukuModel->findAll(); // Mengambil semua data buku
        return view('/buku/tampilBuku', $data);
    }

    // 📌 Menampilkan form tambah buku
    public function create()
    {
        $modelPengarang = new PengarangModel();
        $data['pengarang'] = $modelPengarang->findAll();

        $modelPenerbit = new PenerbitModel();
        $data['penerbit'] = $modelPenerbit->findAll();
        return view('/buku/tambahBuku', $data);
    }

    // 📌 Menyimpan buku baru ke database
    public function store()
    {
        $this->bukuModel->insert([
            'NIB' => $this->request->getPost('nib'),
            'Nama_buku' => $this->request->getPost('nama_buku'),
            'Qty' => $this->request->getPost('qty'),
            'Id_pengarang' => $this->request->getPost('id_pengarang'),
            'Id_penerbit' => $this->request->getPost('id_penerbit'),
        ]);

        return redirect()->to(base_url('buku'))->with('success', 'Buku berhasil ditambahkan!');
    }

    // 📌 Menampilkan form edit buku dengan data yang sudah ada
    public function edit($id)
    {
        $data['buku'] = $this->bukuModel->find($id);
        $modelPengarang = new PengarangModel();
        $data['pengarang'] = $modelPengarang->findAll();

        $modelPenerbit = new PenerbitModel();
        $data['penerbit'] = $modelPenerbit->findAll();

        if (!$data['buku']) {
            return redirect()->to(base_url('buku'))->with('error', 'Buku tidak ditemukan!');
        }

        return view('/buku/editBuku', $data);
    }

    // 📌 Menyimpan perubahan buku ke database
    public function update($id)
    {
        $this->bukuModel->update($id, [
            'Nama_buku' => $this->request->getPost('nama_buku'),
            'Qty' => $this->request->getPost('qty'),
            'Id_pengarang' => $this->request->getPost('id_pengarang'),
            'Id_penerbit' => $this->request->getPost('id_penerbit'),
        ]);

        return redirect()->to(base_url('buku'))->with('success', 'Buku berhasil diperbarui!');
    }

    // 📌 Menghapus buku dari database
    public function delete($id)
    {
        $this->bukuModel->delete($id);
        return redirect()->to(base_url('buku'))->with('success', 'Buku berhasil dihapus!');
    }
}
