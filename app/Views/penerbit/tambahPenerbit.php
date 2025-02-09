<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penerbit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="p-8 bg-amber-50 font-serif">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg border border-gray-300">
        <div class="flex justify-between mb-4">
            <a href="<?= base_url('tampil_penerbit') ?>" class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        
        <h1 class="text-3xl font-bold mb-6 text-brown-800 text-center"><i class="fas fa-building"></i> Tambah Penerbit</h1>

        <form action="<?= base_url('simpan-penerbit') ?>" method="post">
            <div class="mb-4">
                <label class="block text-gray-700">Id (Kode Penerbit)</label>
                <input type="text" name="id_penerbit" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Nama Penerbit</label>
                <input type="text" name="nama_penerbit" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800 transition w-full">
                <i class="fas fa-save"></i> Simpan Penerbit
            </button>
        </form>
    </div>
</body>
</html>