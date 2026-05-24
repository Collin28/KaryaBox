<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin - KaryaBox</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md border border-gray-200">
        <div class="text-center mb-6">
            <h2 class="text-2xl font-black text-gray-800 tracking-tight">BUAT AKUN ADMIN</h2>
            <p class="text-gray-500 text-sm mt-1">Daftarkan akun admin baru KaryaBox</p>
        </div>

        <?php if (isset($data['error'])) : ?>
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-3 rounded-lg mb-4 text-sm font-medium">
                <?= $data['error']; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="/KARYABOX/public/auth/storeRegister" class="space-y-4">
            <div>
                <label class="block text-gray-700 text-xs font-bold uppercase mb-1">Nama Lengkap</label>
                <input type="text" name="username" placeholder="Masukkan nama Anda" required
                    class="w-full px-4 py-2 border-2 border-gray-300 rounded-xl bg-white text-gray-800 focus:outline-none focus:border-[#C9A227]">
            </div>

            <div>
                <label class="block text-gray-700 text-xs font-bold uppercase mb-1">Email</label>
                <input type="email" name="email" placeholder="contoh@gmail.com" required
                    class="w-full px-4 py-2 border-2 border-gray-300 rounded-xl bg-white text-gray-800 focus:outline-none focus:border-[#C9A227]">
            </div>

            <div>
                <label class="block text-gray-700 text-xs font-bold uppercase mb-1">Password</label>
                <input type="password" name="password" placeholder="••••••••" required
                    class="w-full px-4 py-2 border-2 border-gray-300 rounded-xl bg-white text-gray-800 focus:outline-none focus:border-[#C9A227]">
            </div>

            <button type="submit" name="submit"
                class="w-full bg-[#C9A227] hover:bg-[#b59120] text-white py-3 rounded-xl mt-4 font-bold tracking-wide shadow-md transition duration-200">
                Daftar Akun
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-6">
            Sudah punya akun? 
            <a href="/KARYABOX/public/login" class="text-[#C9A227] font-bold hover:underline">Masuk di sini</a>
        </p>
    </div>

</body>
</html>