<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="p-8 bg-amber-50 font-serif">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg border border-gray-300">
        <h1 class="text-3xl font-bold mb-6 text-brown-800 text-center"><i class="fas fa-user-edit"></i> Edit Anggota</h1>
        
        <a href="<?= base_url('tampil_anggota') ?>" class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition mb-4 inline-block">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
        
        <form action="<?= base_url('update-anggota/' . $anggota['NIM']) ?>" method="post" class="mt-4">
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">NIM (Kode Anggota)</label>
                <input type="text" name="nim" value="<?= esc($anggota['NIM']) ?>" readonly class="w-full px-3 py-2 border rounded-lg bg-gray-200">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Nama Anggota</label>
                <input type="text" name="nama_anggota" value="<?= esc($anggota['Nama_anggota']) ?>" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Alamat</label>
                <input type="text" name="alamat" value="<?= esc($anggota['Alamat']) ?>" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <button type="submit" class="w-full bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">
                <i class="fas fa-save"></i> Simpan Perubahan
            </button>
        </form>
    </div>
</body>
</html>