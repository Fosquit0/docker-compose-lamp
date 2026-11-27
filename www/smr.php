<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mi servidor LAMP</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 2rem; background: #f4f6f9; color: #222; }
    .box { background: #fff; padding: 1.5rem; border-radius: 8px; max-width: 560px; }
    a { display: inline-block; margin-top: 1rem; color: #0b5ed7; }
  </style>
</head>
<body>
  <div class="box">
    <h1>Mi servidor LAMP</h1>
    <h2>Servicios en Red 2° SMR</h2>
    <p>Administrador: PAB</p>
    <h3>Información del servidor</h3>
    <?php
      echo "<p>Fecha: " . date("d/m/Y") . "</p>";
      echo "<p>PHP: " . PHP_VERSION . "</p>";
      echo "<p>Servidor: " . $_SERVER["SERVER_SOFTWARE"] . "</p>";
      echo "<p>Contenedor: " . gethostname() . "</p>";
    ?>
    <a href="servicios.php">Directorio de servicios</a>
  </div>
</body>
</html>