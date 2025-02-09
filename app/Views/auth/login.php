<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <?php if (session()->getFlashdata('error')): ?>
        <script>
            alert("<?= session()->getFlashdata('error'); ?>");
        </script>
    <?php endif; ?>
    <?php if (session()->getFlashdata('pendaftaran_berhasil')): ?>
        <script>
            alert("<?= session()->getFlashdata('pendaftaran_berhasil'); ?>");
        </script>
    <?php endif; ?>

    <div class="min-h-screen bg-green-50 flex justify-center items-center">
        <form class="p-5 bg-white shadow-md w-1/4 flex flex-col rounded-xl gap-3" action="<?= base_url('login') ?>" method="post">
            <h1 class="text-center text-3xl font-bold mb-5">Login</h1>
            <label class="block text-green-800 font-medium">Id Admin</label>
            <input type="text" class="border p-1 rounded-md" name="Id_admin">


            <label class="block text-green-800 font-medium">Password</label>
            <input type="password" class="border p-1 rounded-md" name='password'>

            <p class="text-center">Belum punya akun? <a href="<?= base_url('register') ?>"
                    class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-lg text-smtransition">
                    Register
                </a></p>

            <button class="p-2 bg-green-800 text-white rounded-md hover:bg-green-900" type="submit">Login</button>
        </form>
    </div>
</body>

</html>