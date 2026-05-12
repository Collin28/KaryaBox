<?php
$conn = mysqli_connect("localhost", "root", "", "karyabox");

$query = "SELECT * FROM achievements";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<h3>" . $row['title'] . "</h3>";
    echo "<img src='" . $row['image_url'] . "' width='200'><br>";
    echo "<p>" . $row['description'] . "</p><hr>";

    

}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body>
    <pre>
<?php var_dump($achievements); ?>
</pre>
        <!-- Header -->
         <header class="bg-yellow-500">
            <p class="text-red-500">Collin</p>
         </header>
         
</body>
</html>