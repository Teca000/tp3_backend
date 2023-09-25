<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $usuario = $_POST ["usuario"];
    $contrasenia = $_POST ["pass"];

    $ckusuario = "admin";
    $ckpass = 1234;

    if($usuario==$ckusuario && $contrasenia==$ckpass) {
        header ("Location: https://churroseltopo.com/");
    } else {
        header ("Location: https://www.youtube.com/watch?v=BdEKok52qPY");
    }
    ?>
</body>
</html>