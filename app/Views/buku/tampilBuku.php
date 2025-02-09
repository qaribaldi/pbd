<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="p-8 bg-amber-50 font-serif">
    <div class="max-w-5xl mx-auto bg-white p-8 rounded-lg shadow-lg border border-gray-300">
        <h1 class="text-3xl font-bold mb-6 text-brown-800 text-center"><i class="fas fa-book"></i> Daftar Buku</h1>
        
        <div class="flex justify-between mb-6">
            <a href="<?= base_url('peminjaman') ?>" class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <a href="<?= base_url('tambahBuku') ?>" class="bg-emerald-700 text-white px-4 py-2 rounded-lg hover:bg-emerald-800 transition">
                <i class="fas fa-plus"></i> Tambah Buku
            </a>
        </div>
        
        <table class="w-full border border-gray-300 rounded-lg overflow-hidden shadow-md">
            <thead>
                <tr class="bg-emerald-900 text-white">
                    <th class="border px-4 py-3">NIB</th>
                    <th class="border px-4 py-3">Nama Buku</th>
                    <th class="border px-4 py-3">Qty</th>
                    <th class="border px-4 py-3">ID Pengarang</th>
                    <th class="border px-4 py-3">ID Penerbit</th>
                    <th class="border px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $row) : ?>
                    <tr class="bg-white hover:bg-amber-100 transition">
                        <td class="border px-4 py-3 text-center text-brown-700"><?= esc($row['NIB']) ?></td>
                        <td class="border px-4 py-3 text-center text-brown-700"><?= esc($row['Nama_buku']) ?></td>
                        <td class="border px-4 py-3 text-center text-brown-700"><?= esc($row['Qty']) ?></td>
                        <td class="border px-4 py-3 text-center text-brown-700"><?= esc($row['Id_pengarang']) ?></td>
                        <td class="border px-4 py-3 text-center text-brown-700"><?= esc($row['Id_penerbit']) ?></td>
                        <td class="border px-4 py-3 text-center flex justify-center space-x-2">
                            <a href="<?= base_url('editBuku/' . esc($row['NIB'])) ?>" 
                               class="bg-yellow-600 text-white px-3 py-1 rounded-lg text-sm hover:bg-yellow-700 transition">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="<?= base_url('hapus-buku/' . esc($row['NIB'])) ?>" 
                               onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                               class="bg-red-600 text-white px-3 py-1 rounded-lg text-sm hover:bg-red-700 transition">
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
