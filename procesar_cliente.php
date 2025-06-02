<?php
include('includes/db.php');

$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$monto = $_POST['monto'];

$sql = "INSERT INTO clientes (nombre, cedula, direccion, telefono, monto) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssd", $nombre, $cedula, $direccion, $telefono, $monto);
$stmt->execute();

header("Location: clientes.php");
?>