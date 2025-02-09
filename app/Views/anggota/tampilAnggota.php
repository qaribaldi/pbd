<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="p-8 bg-amber-50 font-serif">
    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-lg border border-gray-300">
        <h1 class="text-3xl font-bold mb-6 text-brown-800 text-center">
            <i class="fas fa-users"></i> Daftar Anggota
        </h1>
    
        <div class="flex justify-between mb-4">
            <a href="<?= base_url('peminjaman') ?>" class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <a href="<?= base_url('tambahAnggota') ?>" class="bg-emerald-700 text-white px-4 py-2 rounded-lg hover:bg-emerald-800 transition">
                <i class="fas fa-user-plus"></i> Tambah Anggota
            </a>
        </div>
    
        <table class="w-full border-collapse border border-gray-300 rounded-lg shadow-sm">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="border px-4 py-2">NIM</th>
                    <th class="border px-4 py-2">Nama Anggota</th>
                    <th class="border px-4 py-2">Alamat</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($anggota as $row) : ?>
                    <tr class="bg-white hover:bg-gray-100 transition">
                        <td class="border px-4 py-2 text-center"><?= esc($row['NIM']) ?></td>
                        <td class="border px-4 py-2"><?= esc($row['Nama_anggota']) ?></td>
                        <td class="border px-4 py-2"><?= esc($row['Alamat']) ?></td>
                        <td class="border px-4 py-2 text-center">
                            <a href="<?= base_url('editAnggota/' . esc($row['NIM'])) ?>" class="bg-yellow-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-yellow-600">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="<?= base_url('hapus-anggota/' . $row['NIM']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="bg-red-500 text-white px-3 py-1 rounded-lg text-sm hover:bg-red-600">
                                <i class="fas fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
