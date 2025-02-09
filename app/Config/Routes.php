<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/register', 'AuthController::registerView');
$routes->post('/register', 'AuthController::register');

$routes->get('/login', 'AuthController::loginView');
$routes->post('/login', 'AuthController::login');

$routes->get('/logout', 'AuthController::logout');

$routes->get('/peminjaman', 'PeminjamanController::index');
$routes->get('/tampil-buku', 'BukuController::index');
$routes->get('/tambah-peminjaman', 'PeminjamanController::formTambah');
$routes->post('/simpan-peminjaman', 'PeminjamanController::simpan');
$routes->get('/tambah-peminjaman', 'PeminjamanController::formTambah');
$routes->get('/hapus-peminjaman/(:any)', 'PeminjamanController::hapus/$1');
$routes->get('/edit_peminjaman/(:any)', 'PeminjamanController::edit/$1');
$routes->post('/update-peminjaman/(:any)', 'PeminjamanController::updateData/$1');

$routes->get('/history-peminjaman', 'HistoryPeminjamanController::index');

$routes->get('buku', 'BukuController::index');
$routes->get('tambahBuku', 'BukuController::create');
$routes->post('simpan-buku', 'BukuController::store');
$routes->get('editBuku/(:any)', 'BukuController::edit/$1');
$routes->post('update-buku/(:any)', 'BukuController::update/$1');
$routes->get('hapus-buku/(:any)', 'BukuController::delete/$1');

$routes->get('tampil_anggota', 'AnggotaController::index');
$routes->get('tambahAnggota', 'AnggotaController::create');
$routes->post('simpan-anggota', 'AnggotaController::store');
$routes->get('editAnggota/(:any)', 'AnggotaController::edit/$1');
$routes->post('update-anggota/(:any)', 'AnggotaController::update/$1');
$routes->get('hapus-anggota/(:any)', 'AnggotaController::delete/$1');

$routes->get('tampil_pengarang', 'PengarangController::index');
$routes->get('tambahPengarang', 'PengarangController::create');
$routes->post('simpan-pengarang', 'PengarangController::store');
$routes->get('editPengarang/(:any)', 'PengarangController::edit/$1');
$routes->post('update-pengarang/(:any)', 'PengarangController::update/$1');
$routes->get('hapus-pengarang/(:any)', 'PengarangController::delete/$1');

$routes->get('tampil_penerbit', 'PenerbitController::index');
$routes->get('tambahPenerbit', 'PenerbitController::create');
$routes->post('simpan-penerbit', 'PenerbitController::store');
$routes->get('editPenerbit/(:any)', 'PenerbitController::edit/$1');
$routes->post('update-penerbit/(:any)', 'PenerbitController::update/$1');
$routes->get('hapus-penerbit/(:any)', 'PenerbitController::delete/$1');
