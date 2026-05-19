<?php

session_start();
include "db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            session_regenerate_id(true);

            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            header("Location: homepage.php");
            exit();

        } else {

            $error = "Password salah!";

        }

    } else {

        $error = "Email tidak ditemukan!";

    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <title>Login</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-[#1d2b4f] flex justify-center items-center h-screen m-0 font-sans">

    <form 
        method="POST"
        class="bg-[#f2f2f2] w-80 p-6 rounded-lg text-center relative"
    >

        <!-- Logo -->
        <img
            src="Group_20-removebg-preview.png"
            class="w-6 absolute top-2 left-2"
        >

        <!-- Title -->
        <h2 class="text-[#d4a62a] text-2xl font-bold mb-5">
            LOGIN
        </h2>

        <!-- Error -->
        <?php if (!empty($error)) : ?>

            <p class="text-red-500 text-sm mb-2 text-center">
                <?= $error ?>
            </p>

        <?php endif; ?>

        <!-- Email -->
        <input
            type="email"
            name="email"
            placeholder="Email"
            required
            class="w-11/12 p-2 my-2 border border-[#d4a62a] rounded outline-none"
        >

        <!-- Password -->
        <input
            type="password"
            name="password"
            placeholder="Password"
            required
            class="w-11/12 p-2 my-2 border border-[#d4a62a] rounded outline-none"
        >

        <!-- Button -->
        <button
            type="submit"
            class="w-11/12 p-2 mt-4 bg-[#d4a62a] text-white rounded hover:bg-[#b88d20]"
        >
            Masuk Akun
        </button>

        <!-- Register -->
        <a
            href="register.php"
            class="block mt-3 text-blue-600 text-xs"
        >
            Buat Akun
        </a>

    </form>

    <script src="script.js"></script>

</body>

</html>