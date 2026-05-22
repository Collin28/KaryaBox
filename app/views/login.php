<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/css/output.css">
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body class="bg-[#1E2A47] flex items-center justify-center min-h-screen">

    <!-- CARD -->
    <div class="bg-gray-200 w-[340px] rounded-xl shadow-lg p-8 relative">

        <img src="assets/images/karyabox.png" class="w-8 absolute top-4 left-4">

        <!-- TITLE -->
        <h2 class="text-center text-[#D4AF37] text-xl font-bold mb-6 mt-2">
            LOGIN
        </h2>

        <!-- FORM -->
        <form method="POST" action="login.php" class="space-y-4">

            <input type="text" name="nama" placeholder="Nama admin"
                class="w-full px-4 py-2 border border-[#D4AF37] rounded-md bg-transparent focus:outline-none focus:ring-2 focus:ring-yellow-500">

            <input type="password" name="password" placeholder="Password"
                class="w-full px-4 py-2 border border-[#D4AF37] rounded-md bg-transparent focus:outline-none focus:ring-2 focus:ring-yellow-500">

            <button type="submit"
                class="w-full bg-[#C9A227] text-white py-2 rounded-md mt-2 hover:opacity-90 transition">
                Masuk Akun
            </button>

        </form>

    </div>

</body>

</html>