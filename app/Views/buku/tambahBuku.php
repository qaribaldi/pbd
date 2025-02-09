<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="p-8 bg-amber-50 font-serif">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg border border-gray-300">
        <h1 class="text-3xl font-bold mb-6 text-brown-800 text-center"><i class="fas fa-book"></i> Tambah Buku</h1>
        
        <a href="<?= base_url('buku') ?>" class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition mb-4 inline-block">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
        
        <form action="<?= base_url('simpan-buku') ?>" method="post" class="mt-4">
            <div class="mb-4">
                <label class="block text-gray-700">NIB (Kode Buku)</label>
                <input type="text" name="nib" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Nama Buku</label>
                <input type="text" name="nama_buku" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Qty</label>
                <input type="number" name="qty" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">ID Pengarang (Kode Pengarang)</label>
                <select name="id_pengarang" required class="w-full px-3 py-2 border rounded-lg">
                    <option value="">Pilih Pengarang</option>
                    <?php foreach ($pengarang as $item) : ?>
                        <option value="<?= esc($item['Id_pengarang']); ?>">
                            <?= esc($item['Id_pengarang']); ?> - <?= esc($item['Nama_pengarang']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">ID Penerbit (Kode Penerbit)</label>
                <select name="id_penerbit" required class="w-full px-3 py-2 border rounded-lg">
                    <option value="">Pilih Penerbit</option>
                    <?php foreach ($penerbit as $item) : ?>
                        <option value="<?= esc($item['Id_penerbit']); ?>">
                            <?= esc($item['Id_penerbit']); ?> - <?= esc($item['Nama_penerbit']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="bg-emerald-700 text-white px-4 py-2 rounded-lg hover:bg-emerald-800 transition w-full">
                <i class="fas fa-save"></i> Simpan Buku
            </button>
        </form>
    </div>
</body>
</html>