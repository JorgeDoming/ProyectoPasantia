<?php include('includes/header.php'); ?>
<h2>Agregar Cliente</h2>
<form method="POST" action="procesar_cliente.php">
    <input type="text" name="nombre" placeholder="Nombre y Apellido" required><br>
    <input type="text" name="cedula" placeholder="Cédula / RUC"><br>
    <input type="text" name="direccion" placeholder="Dirección"><br>
    <input type="text" name="telefono" placeholder="Teléfono"><br>
    <input type="number" name="monto" placeholder="Monto acordado" required><br>
    <button type="submit">Guardar cliente</button>
</form>
<?php include('includes/footer.php'); ?>