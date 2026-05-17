<?php

include "db.php";

$title = $_POST['title'];

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

move_uploaded_file(
    $tmp,
    "uploads/" . $image
);

$sql = "INSERT INTO posts (title, image)
        VALUES ('$title', '$image')";

$conn->query($sql);

header("Location: insert.php");

?>