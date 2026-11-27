<?php
$conexion = new mysqli(
    "database",
    "root",
    getenv("MYSQL_ROOT_PASSWORD"),
    "smr"
);
$conexion->set_charset("utf8mb4");

$resultado = $conexion->query("SELECT * FROM servicios");
echo "<h1>Directorio de servicios</h1>";
echo "<table border='1'>";
echo "<tr><th>Servicio</th><th>Puerto</th></tr>";
while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($fila["nombre"]) . "</td>";
    echo "<td>" . $fila["puerto"] . "</td>";
    echo "</tr>";
}
echo "</table>";
$conexion->close();
?>