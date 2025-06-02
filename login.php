<?php include('includes/header.php'); ?>
<h2>Iniciar Sesión</h2>
<form method="POST" action="validar_login.php">
    <input type="text" name="usuario" placeholder="Usuario" required><br>
    <input type="password" name="clave" placeholder="Contraseña" required><br>
    <button type="submit">Iniciar Sesión</button>
</form>
<?php include('includes/footer.php'); ?>