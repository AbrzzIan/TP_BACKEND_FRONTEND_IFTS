<?php
    include("connection.php");
    $conn = conexion();

    if ($_SERVER["REQUEST_METHOD"] == "POST") { // verifica si el method del forms es POST
        $numero = $_POST["pk"];
        $email = $_POST["email"];
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];

        $sql = "UPDATE usuarios SET email = '$email', usuario = '$usuario', contraseña = '$password' WHERE id = '$numero'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Actualización exitosa";
        } else {
            echo "Error en la actualización: " . $conn->error;
        }

        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
</head>
<body>
    Ingrese ID a modificar:
    <form method="post">
        <input type="text" name="pk" id="pk">
        <br>
        Nuevo email: <input type="text" name="email" id="email">
        <br>
        Nuevo usuario: <input type="text" name="usuario" id="usuario">
        <br>
        Nueva contraseña: <input type="text" name="password" id="password">
        <br>
        <input type="submit" value="Modificar">
    </form>
</body>
</html>


