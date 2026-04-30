<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-[#1E2A47] flex items-center justify-center min-h-screen">

<div class="bg-gray-200 p-8 rounded-xl w-[320px] shadow-lg relative">

    <!-- ICON -->
    <img src="assets/images/karyabox.png" 
         class="w-10 absolute left-4 top-3">

    <!-- TITLE -->
    <h2 class="text-[#D4AF37] text-xl font-bold text-center mb-6 mt-2">
        REGISTER
    </h2>

    <!-- FORM -->
    <form method="POST" action="proses_register.php" class="space-y-4">

        <input type="email" name="email" placeholder="Email"
        class="w-full px-3 py-2 border border-[#D4AF37] rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500"
        required>

        <input type="text" name="nama" placeholder="Nama siswa"
        class="w-full px-3 py-2 border border-[#D4AF37] rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500"
        required>

        <input type="password" name="password" placeholder="Password"
        class="w-full px-3 py-2 border border-[#D4AF37] rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500"
        required>

        <input type="password" name="confirm_password" placeholder="Confirm Password"
        class="w-full px-3 py-2 border border-[#D4AF37] rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500"
        required>

        <button type="submit"
        class="w-full bg-[#D4AF37] text-white py-2 rounded-md hover:opacity-90 transition">
            Masuk Akun
        </button>

    </form>

    <!-- LINK -->
    <a href="index.php" class="text-blue-600 text-sm mt-4 block text-center">
        Login
    </a>

</div>

</body>
</html>