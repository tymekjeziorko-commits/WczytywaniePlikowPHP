<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="obrazy[]" multiple accept=".jpg,.jpeg,.png" >
    <br><br>
    <button type="submit">Button</button>
</form>


</body>
</html>