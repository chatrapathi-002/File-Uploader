
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
    <link rel="stylesheet" href="style.css">
    <!--icons-->
    <script src="https://kit.fontawesome.com/519d595aac.js" crossorigin="anonymous"></script>
</head>
<body>
<form action="index.php" method="post" enctype="multipart/form-data" >
    <div class="container">
        <div id="images"></div>
        <input type="file" name="myfile" id="file-input" accept="image/jpeg, image/png" onchange="preview()" multiple>
        <label for="file-input" id="button">
            <i class="fas fa-cloud-upload-alt"></i>choose image
        </label>    
        <p id="number-of-img">No image selected yet</p>
       <div>
        <button type="submit" name="save" class="btn">UPLOAD</button>
        </div>
        <div class="out-txt">
        <?php include('upload.php')?>
        </div>
    </div>
</form>      
    <script src="main.js"></script>
</body>
</html>