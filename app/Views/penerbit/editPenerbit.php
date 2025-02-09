<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Penerbit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-8 bg-gray-100">
<div class="flex justify-between mb-4">
            <a href="<?= base_url('tampil_penerbit') ?>" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                kembali
            </a>
</div>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">Edit Penerbit</h1>

        <form action="<?= base_url('update-penerbit/' . $penerbit['Id_penerbit']) ?>" method="post">
            <div class="mb-4">
                <label class="block text-gray-700">Id (Kode Penerbit)</label>
                <input type="text" name="id_penerbit" value="<?= esc($penerbit['Id_penerbit']) ?>" readonly class="w-full px-3 py-2 border rounded-lg bg-gray-200">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Nama Penerbit</label>
                <input type="text" name="nama_penerbit" value="<?= esc($penerbit['Nama_penerbit']) ?>" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">
                Simpan Perubahan
            </button>
        </form>
    </div>
</body>
</html>
