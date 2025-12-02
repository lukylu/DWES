<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Titles</title>
</head>
<body>
    <h1>Subir ficheros</h1>
    <p><?php echo $msg; ?></p>
    
    <form action="15-upload-files-processing.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image">
        <input type="submit" name="submit" id="submit" value="enviar">
    </form>
    
</body>
</html>