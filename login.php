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

    <link rel="stylesheet" href="index.css">

</head>

<body>

<form method="POST" class="atas">

    <img
        src="Group_20-removebg-preview.png"
        class="logo"
    >

    <h2>LOGIN</h2>

    <?php if (!empty($error)) : ?>

        <p class="error" id="error-message">
            <?= $error ?>
        </p>

    <?php endif; ?>

    <input
        type="email"
        name="email"
        placeholder="Email"
        required
    >

    <input
        type="password"
        name="password"
        placeholder="Password"
        required
    >

    <button type="submit">
        Masuk Akun
    </button>

    <a href="register.php" class="bawah">
        Buat Akun
    </a>

</form>

<script src="script.js"></script>

</body>
</html>