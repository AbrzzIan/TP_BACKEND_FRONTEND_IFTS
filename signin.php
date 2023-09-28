<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP LOGIN</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar.css">
</head>
<body>
    <?php
        include_once("./api/navbar.php")
    ?>
    
    <form action="api/recibirUsuarios.php" method="POST" id="user_form">
        <h2>REGISTRO</h2>
        email
        <input type="email" name="email" id="email"><br>
        usuario
        <input type="text" name="usuario" id="usuario"><br>
        contraseña
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        include_once("./api/footer.php")
    ?>
</body>
</html>