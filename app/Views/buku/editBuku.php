<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="p-8 bg-amber-50 font-serif">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg border border-gray-300">
        <h1 class="text-3xl font-bold mb-6 text-brown-800 text-center"><i class="fas fa-edit"></i> Edit Buku</h1>
        
        <a href="<?= base_url('buku') ?>" class="bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition mb-4 inline-block">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
        
        <form action="<?= base_url('update-buku/' . esc($buku['NIB'])) ?>" method="post" class="mt-4">
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">NIB (Kode Buku)</label>
                <input type="text" name="nib" value="<?= esc($buku['NIB']) ?>" readonly class="w-full px-3 py-2 border rounded-lg bg-gray-200">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Nama Buku</label>
                <input type="text" name="nama_buku" value="<?= esc($buku['Nama_buku']) ?>" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Qty</label>
                <input type="number" name="qty" value="<?= esc($buku['Qty']) ?>" required class="w-full px-3 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">ID Pengarang (Kode Pengarang)</label>
                <select name="id_pengarang" required class="w-full px-3 py-2 border rounded-lg">
                    <option value="">Pilih Pengarang</option>
                    <?php foreach ($pengarang as $item) : ?>
                        <option value="<?= esc($item['Id_pengarang']); ?>" 
                            <?= ($item['Id_pengarang'] == $buku['Id_pengarang']) ? 'selected' : '' ?>>
                            <?= esc($item['Id_pengarang']); ?> - <?= esc($item['Nama_pengarang']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">ID Penerbit (Kode Penerbit)</label>
                <select name="id_penerbit" required class="w-full px-3 py-2 border rounded-lg">
                    <option value="">Pilih Penerbit</option>
                    <?php foreach ($penerbit as $item) : ?>
                        <option value="<?= esc($item['Id_penerbit']); ?>" 
                            <?= ($item['Id_penerbit'] == $buku['Id_penerbit']) ? 'selected' : '' ?>>
                            <?= esc($item['Id_penerbit']); ?> - <?= esc($item['Nama_penerbit']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="w-full bg-emerald-700 text-white px-4 py-2 rounded-lg hover:bg-emerald-800 transition">
                <i class="fas fa-save"></i> Simpan Perubahan
            </button>
        </form>
    </div>
</body>
</html>
