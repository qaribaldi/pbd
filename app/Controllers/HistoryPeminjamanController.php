<?php

namespace App\Controllers;

use App\Models\HistoryPeminjamanModel;
use CodeIgniter\Controller;

class HistoryPeminjamanController extends Controller
{
    protected $historyModel;

    public function __construct()
    {
        $this->historyModel = new HistoryPeminjamanModel();
    }

    // 📌 Menampilkan daftar buku
    public function index()
    {
        $data['buku'] = $this->historyModel->findAll(); // Mengambil semua data buku
        return view('/peminjaman/historyPeminjaman', $data);
    }
}
