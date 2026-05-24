<?php
include "../db.php";

$student_name = mysqli_real_escape_string($conn, $_POST['student_name']);
$school       = mysqli_real_escape_string($conn, $_POST['school']);
$title        = mysqli_real_escape_string($conn, $_POST['title']);
$description  = mysqli_real_escape_string($conn, $_POST['description']);
$video_link   = mysqli_real_escape_string($conn, $_POST['video_link']);


$image     = $_FILES['image']['name'];
$tmp_name  = $_FILES['image']['tmp_name'];


move_uploaded_file($tmp_name, "../uploads/" . $image);


$sql = "INSERT INTO posts (student_name, school, title, description, image, video_link) 
        VALUES ('$student_name', '$school', '$title', '$description', '$image', '$video_link')";

if ($conn->query($sql)) {
  
    header("Location: insert.php");
} else {
    echo "Error: " . $conn->error;
}
?>