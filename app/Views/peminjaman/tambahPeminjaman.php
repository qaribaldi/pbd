<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peminjaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="p-8 bg-green-50">
    <div class="flex justify-between mb-4">
        <a href="<?= base_url('peminjaman') ?>" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg border border-gray-300">
        <h1 class="text-2xl font-semibold mb-4 text-green-800 text-center"><i class="fas fa-book"></i> Tambah Peminjaman</h1>

        <form action="<?= base_url('simpan-peminjaman') ?>" method="post">
            <div class="mb-4">
                <label class="block text-green-800 font-medium">NIM (ID Anggota)</label>
                <select name="nim" required class="w-full px-3 py-2 border border-green-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                    <option value="">Pilih NIM</option>
                    <?php foreach ($anggota as $item) : ?>
                        <option value="<?= esc($item['NIM']); ?>">
                            <?= esc($item['NIM']); ?> - <?= esc($item['Nama_anggota']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-green-800 font-medium">NIB (Kode Buku)</label>
                <select name="nib" required class="w-full px-3 py-2 border border-green-300 rounded-lg focus:ring-green-500 focus:border-green-500">
                    <option value="">Pilih Buku</option>
                    <?php foreach ($buku as $item) : ?>
                        <option value="<?= esc($item['NIB']); ?>">
                            <?= esc($item['NIB']); ?> - <?= esc($item['Nama_buku']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-green-800 font-medium">Tanggal Pinjam</label>
                <input type="date" name="tanggal_pinjam" required class="w-full px-3 py-2 border border-green-300 rounded-lg focus:ring-green-500 focus:border-green-500">
            </div>

            <div class="mb-4">
                <label class="block text-green-800 font-medium">Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" required class="w-full px-3 py-2 border border-green-300 rounded-lg focus:ring-green-500 focus:border-green-500">
            </div>

            <div class="mb-4">
                <label class="block text-green-800 font-medium">ADMIN (ID Admin)</label>
                <input readonly type="text" value="<?= session()->get('user_id') ?>" name="id_admin" required class="w-full px-3 py-2 border border-green-300 rounded-lg focus:ring-green-500 focus:border-green-500 bg-gray-200">
            </div>


            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition w-full mt-4">
                <i class="fas fa-save"></i> Tambah Peminjaman
            </button>
        </form>
    </div>
</body>

</html>