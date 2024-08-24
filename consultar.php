<?php
$servername = "autorack.proxy.rlwy.net";
$username = "root"; // Nombre de usuario por defecto
$password = "GjKDsZAgThTngPshOjlDRdPjeqcRRMIz"; // Por defecto, la contraseña está vacía
$dbname = "railway"; // Cambia esto al nombre de tu base de datos
$port = 45639; // Puerto personalizado

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";

// Consultar los datos de la tabla personas
$sql = "SELECT * FROM personas";
$resultado = mysqli_query($conn, $sql);

// Crear la tabla HTML para mostrar los datos
echo '<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>


<div class="container">
<h2>Datos de la Tabla Personas</h2>
<table border="1" class="table">
<tr><th>Nombre</th><th>Apellido</th><th>Numerodeprendas</th><th>Ciudad</th><th>Estado</th><th>Codigopostal</th></tr>';



while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>".$fila['Nombre']."</td>";
    echo "<td>".$fila['Apellido']."</td>";
    echo "<td>".$fila['Numerodeprendas']."</td>";
    echo "<td>".$fila['Ciudad']."</td>";
    echo "<td>".$fila['Estado']."</td>";
    echo "<td>".$fila['Codigopostal']."</td>";
    echo "</tr>";
}

echo "</table>";

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>

<body>
<a class="btn btn-success" href="index.html">Inicio</a>
</body>