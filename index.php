<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!-- enctype=epecifica el tipo de archivo vamos a tratar -->
<form action="datosImagen.php" method="POST" enctype="multipart/form-data">
  <label for="img"> Imagen:</label>   
  <input type="file" name="img" size="20">
  <input type="submit" value="submit">
</form>

</body>
</html>