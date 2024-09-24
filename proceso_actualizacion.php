<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', email='$email', celular='$celular' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();    } else {
        echo "<div class='alert alert-danger'>Error actualizando registro: " . $conn->error . "</div>";
    }

    $conn->close();
}
?>