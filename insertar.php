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
echo  "(¡CONEXIÓN EXITOSA!)  ------>"  ;    

//Optener los datos del formulario
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Numerodeprendas = $_POST['Numerodeprendas'];
$Ciudad = $_POST['Ciudad'];
$Estado = $_POST['Estado'];
$Codigopostal = $_POST['Codigopostal'];

//Insertar los datos en la base de datos
$sql = "INSERT INTO personas (Nombre, Apellido, Numerodeprendas, Ciudad, Estado, Codigopostal) VALUES 
('$Nombre', '$Apellido', '$Numerodeprendas', '$Ciudad', '$Estado', '$Codigopostal')";

if (mysqli_query($conn, $sql)){
    echo "Datos guardados corectamente.";
} else {
    echo "Error al guardar los datos:" . mysqli_error($conn);
}

//Cerrar la conexion a la base de datos
    mysqli_close($conn);
?>

<body>
<a class="btn btn-success" href="index.html">Inicio</a>
</body>