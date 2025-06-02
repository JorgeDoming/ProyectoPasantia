<?php
session_start();
include('includes/db.php');

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM usuarios WHERE usuario=? AND clave=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario, $clave);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $_SESSION['usuario'] = $usuario;
    header("Location: dashboard.php");
} else {
    echo "Usuario o contraseña incorrectos";
}
?>