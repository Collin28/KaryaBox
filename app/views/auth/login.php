<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KARYABOX</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#1E2A47] flex items-center justify-center min-h-screen font-sans">

    <div class="bg-slate-100 w-[360px] rounded-2xl shadow-2xl p-8 relative pt-24 border border-yellow-500/20">

        <div class="absolute -top-12 left-1/2 transform -translate-x-1/2 bg-[#1E2A47] p-4 rounded-full shadow-lg border-2 border-[#D4AF37]">
            <img src="/assets/images/karyabox.png" class="w-20 h-20 object-contain" alt="Logo Karyabox">
        </div>

        <div class="text-center mb-8">
            <h2 class="text-[#C9A227] text-2xl font-black tracking-wider">LOGIN</h2>
            <p class="text-gray-500 text-xs mt-1">Silakan masuk ke akun KARYABOX Anda</p>
        </div>

        <?php if (isset($data['error'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded-lg text-sm text-center mb-4 font-medium animate-pulse">
                <?= htmlspecialchars($data['error']); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="/admin/login" class="space-y-5">

            <div>
                <label class="block text-gray-700 text-xs font-bold uppercase tracking-wider mb-1">Username</label>
                <input type="text" name="name" placeholder="Masukkan username" required
                    class="w-full px-4 py-2.5 border-2 border-gray-300 rounded-xl bg-white text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#C9A227] focus:ring-2 focus:ring-yellow-200 transition-all text-sm font-medium">
            </div>

            <div>
                <label class="block text-gray-700 text-xs font-bold uppercase tracking-wider mb-1">Password</label>
                <input type="password" name="password" placeholder="••••••••" required
                    class="w-full px-4 py-2.5 border-2 border-gray-300 rounded-xl bg-white text-gray-800 placeholder-gray-400 focus:outline-none focus:border-[#C9A227] focus:ring-2 focus:ring-yellow-200 transition-all text-sm font-medium">
            </div>

            <button type="submit"
                class="w-full bg-[#C9A227] hover:bg-[#b59120] text-white py-3 rounded-xl mt-4 font-bold tracking-wide shadow-md hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200 text-sm">
                Masuk Akun
            </button>

        </form>

        <div class="text-center mt-6">
            <p class="text-gray-400 text-[10px]">&copy; 2026 KARYABOX. All rights reserved.</p>
        </div>

    </div>

</body>

</html>