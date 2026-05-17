<!DOCTYPE html>
<html>
<head>
    <title>Insert Image</title>
</head>
<body>

<h1>Upload Image</h1>

<form action="upload_process.php"
      method="POST"
      enctype="multipart/form-data">

    <input type="text"
           name="title"
           placeholder="Input title">

    <br><br>

    <input type="file"
           name="image">

    <br><br>

    <button type="submit">
        Upload
    </button>

</form>

</body>
</html>