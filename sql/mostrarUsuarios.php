<?php
    include("connection.php");

    $conn = conexion();

    $sql = "SELECT * FROM usuarios";
    $result = $conn -> query($sql);

    $conn ->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Usuarios</title>
</head>
<link rel="stylesheet" href="../css/mostrarusuarios.css">
<body>

<a href="/signin.php">VOLVER</a>
    <table class="table-products">
        <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>USUARIO</th>
            <th>CONTRASEÑA</th>
        </tr>
   
<?php

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . " "."</td>";
        echo "<td>" . $row["email"] ." ". "</td>";
        echo "<td>" . $row["username"] . " "."</td>";
        echo "<td>" . $row["password"] ." ". "</td>";
        echo "</tr>"."<br>";
    }
} else {
    echo "NO HAY REGISTROS";
}
?>
    </table>
</body>
</html>