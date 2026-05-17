<?php

include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
   

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $check = $conn->prepare(
        "SELECT * FROM users WHERE email=?"
    );

    $check->bind_param("s", $email);

    $check->execute();

    $result = $check->get_result();

    if ($result->num_rows > 0) {

        $message = "Email sudah digunakan!";

    } else {

        $sql = $conn->prepare(
            "INSERT INTO users
            (username, email, password, role)
            VALUES (?, ?, ?, ?)"
        );

        $sql->bind_param(
            "ssss",
            $username,
            $email,
            $hashedPassword,
            $role
        );

        if ($sql->execute()) {

            header("Location: login.php?success=1");
            exit();

        } else {

            $message = "Gagal membuat akun!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

<form method="POST" class="atas">
<img src="Group_20-removebg-preview.png" class="logo">

    <h2>REGISTER</h2>

    <?php
    if ($message != "") {
        echo "<p class='error'>$message</p>";
    }
    ?>

    <input
        type="text"
        name="username"
        placeholder="Username"
        required
    >

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
        Buat Akun
    </button>

    <a href="login.php" class="bawah">
        Sudah punya akun?
    </a>

</form>

</body>
</html>