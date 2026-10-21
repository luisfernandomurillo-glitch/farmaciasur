<?php
$servicios = ["Consulta general - Bs 60", "Vacuna antirrabica - Bs 40", "Bano y corte - Bs 50"];

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mascota = $_POST["mascota"];

echo "<h2>Turno reservado en Veterinaria Patitas</h2>";
echo "<p>Nombre: $nombre</p>";
echo "<p>Correo: $correo</p>";
echo "<p>Consulta: $mascota</p>";

echo "<ul>";

foreach ($servicios as $servicio){
    echo "<li>$servicio</li>";
}

echo "</ul>";

echo "<p> Te atiende Murillo Apaza Luis Fernando</p>";
?>