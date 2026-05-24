<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "nama_database"
);

if ($conn->connect_error) {
    die("Connection failed");
}