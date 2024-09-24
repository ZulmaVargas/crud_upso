<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    
    $sql = "INSERT INTO usuarios (nombre, apellido, email, celular) VALUES ('$nombre', '$apellido', '$email', '$celular')";
    
    if ($conn->query($sql) === TRUE) {
        //echo "<div class='alert alert-danger'>Registro Cargado Exitosamente </div>";

        header("Location: index.php");
        exit();     
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    $conn->close();
}
?>