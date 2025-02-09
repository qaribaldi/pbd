<?php

namespace App\Controllers;

use App\Models\PeminjamanModel;
use CodeIgniter\Controller;
use App\Models\BukuModel;
use App\Models\AnggotaModel;
use App\Models\AdminModel;
use App\Models\LihatDataBuku_Model;



class PeminjamanController extends Controller
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            session()->setFlashdata('error', 'Login Terlebih Dahulu');
            return redirect()->to('/login');
        }
        $model = new LihatDataBuku_Model();
        $data['buku'] = $model->getAllData();



        return view('/peminjaman/tampilPeminjaman', $data);
    }

    public function formTambah()
    {
        if (!session()->get('logged_in')) {
            session()->setFlashdata('error', 'Login Terlebih Dahulu');
            return redirect()->to('/login');
        }
        $modelBuku = new BukuModel();
        $data['buku'] = $modelBuku->findAll();

        $modelAnggota = new AnggotaModel();
        $data['anggota'] = $modelAnggota->findAll();

        $modelAdmin = new AdminModel();
        $data['admin'] = $modelAdmin->findAll();
        return view('/peminjaman/tambahPeminjaman', $data);
    }

    public function simpan()
    {
        $db = \Config\Database::connect();

        // Ambil data dari form
        $nim = $this->request->getPost('nim');
        $nib = $this->request->getPost('nib');
        $tanggal_pinjam = $this->request->getPost('tanggal_pinjam');
        $tanggal_kembali = $this->request->getPost('tanggal_kembali');
        $admin_id = $this->request->getPost('id_admin');

        // Ubah format tanggal ke YYYY-MM-DD agar sesuai dengan format MySQL
        $tanggal_pinjam = date('Y-m-d', strtotime($tanggal_pinjam));
        $tanggal_kembali = date('Y-m-d', strtotime($tanggal_kembali));

        // Jalankan Stored Procedure
        $query = $db->query("CALL tambah_peminjaman(?, ?, ?, ?, ?)", [
            $nim,
            $nib,
            $tanggal_pinjam,
            $tanggal_kembali,
            $admin_id
        ]);

        // Ambil hasil pesan dari stored procedure
        $result = $query->getRow();

        if ($result->pesan == 'Peminjaman berhasil') {
            return redirect()->to('/peminjaman')->with('message', 'Peminjaman berhasil');
        } else {
            return redirect()->to('/tambahPeminjaman')->with('error', 'Buku tidak tersedia');
        }
    }

    public function hapus($id)
    {
        if (!session()->get('logged_in')) {
            session()->setFlashdata('error', 'Login Terlebih Dahulu');
            return redirect()->to('/login');
        }
        $model = new PeminjamanModel();

        // Cek apakah data dengan ID yang diberikan ada
        $data = $model->find($id);
        if ($data) {
            $model->delete($id);
            return redirect()->to('/peminjaman')->with('message', 'Data berhasil dihapus');
        } else {
            return redirect()->to(base_url('lihat_data_buku'))->with('error', 'Data tidak ditemukan');
        }
    }

    public function edit($id)
    {
        if (!session()->get('logged_in')) {
            session()->setFlashdata('error', 'Login Terlebih Dahulu');
            return redirect()->to('/login');
        }
        $model = new PeminjamanModel();
        $data['peminjaman'] = $model->find($id); // Ambil data berdasarkan ID

        $modelBuku = new BukuModel();
        $data['buku'] = $modelBuku->findAll();

        $modelAnggota = new AnggotaModel();
        $data['anggota'] = $modelAnggota->findAll();

        $modelAdmin = new AdminModel();
        $data['admin'] = $modelAdmin->findAll();

        if (!$data['peminjaman']) {
            return redirect()->to('/peminjaman')->with('error', 'Data tidak ditemukan');
        }

        return view('/peminjaman/editPeminjaman', $data);
    }

    public function updateData($id)
    {
        $model = new PeminjamanModel();

        // Ambil data dari form
        $nim = $this->request->getPost('nim');
        $nib = $this->request->getPost('nib');
        $tanggal_pinjam = $this->request->getPost('tanggal_pinjam');
        $tanggal_kembali = $this->request->getPost('tanggal_kembali');
        $id_admin = $this->request->getPost('id_admin');


        // Ubah format tanggal ke YYYY-MM-DD agar sesuai dengan MySQL
        $tanggal_pinjam = date('Y-m-d', strtotime($tanggal_pinjam));
        $tanggal_kembali = date('Y-m-d', strtotime($tanggal_kembali));

        // Update data di database
        $model->update($id, ['NIM' => $nim, 'NIB' => $nib, 'Tanggal_Pinjam' => $tanggal_pinjam, 'Tanggal_Kembali' => $tanggal_kembali, 'Id_admin' => $id_admin]);

        return redirect()->to(base_url('peminjaman'))->with('message', 'Data berhasil diperbarui');
    }
}
