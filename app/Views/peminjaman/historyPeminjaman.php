<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data History Peminjaman Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="p-8 bg-amber-50 font-sans">
    <div class="max-w-5xl mx-auto bg-white p-8 rounded-lg shadow-lg border border-gray-300">
        <h1 class="text-3xl font-bold mb-6 text-emerald-900 text-center"><i class="fas fa-book"></i> Data History Peminjaman Buku</h1>

        <div class="flex justify-start space-x-4 mb-6">
            <a href="<?= base_url('peminjaman') ?>" class="bg-emerald-700 text-white px-4 py-2 rounded-lg hover:bg-emerald-800 transition">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>

        <table class="w-full border border-gray-300 rounded-lg overflow-hidden shadow-md">
            <thead>
                <tr class="bg-emerald-900 text-white">
                    <th class="border px-4 py-3">No Pinjaman</th>
                    <th class="border px-4 py-3">NIM</th>
                    <th class="border px-4 py-3">NIB</th>
                    <th class="border px-4 py-3">Tanggal Pinjam</th>
                    <th class="border px-4 py-3">Tanggal Kembali</th>
                    <th class="border px-4 py-3">ID Admin</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($buku as $row) : ?>
                    <tr class="bg-white hover:bg-amber-100 transition">
                        <td class="border px-4 py-3 text-center text-gray-800 font-medium">
                            <?= esc($row['NO_pinjam']) ?>
                        </td>
                        <td class="border px-4 py-3 text-center text-gray-800 font-medium">
                            <?= esc($row['NIM']) ?>
                        </td>
                        <td class="border px-4 py-3 text-center text-gray-800 font-medium">
                            <?= esc($row['NIB']) ?>
                        </td>
                        <td class="border px-4 py-3 text-center text-gray-800 font-medium">
                            <?= esc($row['Tanggal_Pinjam']) ?>
                        </td>
                        <td class="border px-4 py-3 text-center text-gray-800 font-medium">
                            <?= esc($row['Tanggal_Kembali']) ?>
                        </td>
                        <td class="border px-4 py-3 text-center text-gray-800 font-medium">
                            <?= esc($row['Id_admin']) ?>
                        </td>
                        <td class="border px-4 py-3 text-center flex justify-center space-x-2">

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>