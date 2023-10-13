<?php 
$path=$_GET['openid'];
$current = file_get_contents($path);


?>

<style>
    .title{
        
        background-color: #0A91E4;
        color: #fff;
        padding: 20px;
    }
    textarea {
        border: 3px solid black;
        border-radius: 8%;
        padding: 30px;
    }

    .btn.btn-primary, .btn.btn-info {
            background-color: #0a1c2c;
            color: #fff;
            transition: all 60ms;
        }
        .btn.btn-primary, .btn.btn-info:hover {
            border-radius: 6%;
            background-color: #4f6378;
            color: #000;
        }
.text-left{
    margin-left: 20vw;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Bloc de notas</title>
    <style>
        .sex{
            display:flex;
            justify-content: center;
            align-items: center;
        }
        .textarea{
            display:block;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
</head>
<body>
    <h1 class="title text-center">Editor de texto <img src="pruebita.png" width="50px"></h1> <br>
    <form action="update.php?openid=<?php echo $path;?>" method="post">
        <textarea class="textarea" id="text" name="text" rows="20" cols="100"><?php echo $current ?> </textarea> <br><br>
        <div class="text-left">
            <input type="submit" value="Actualizar" class="btn btn-primary">
            <a href="index.php" class="btn btn-info">Regresar</a>
        </div>
    

    </form>
  
</body>
</html>