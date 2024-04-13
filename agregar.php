<?php include 'config.php';?>

<?php
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$autor = $_POST["autor"];
$fecha_edicion = $_POST["fecha_edicion"];
$precio = $_POST["precio"];

$sql = "INSERT INTO libros (codigo, nombre, autor, fecha_edicion, precio) VALUES ('$codigo', '$nombre', '$autor', '$fecha_edicion', '$precio')";

if ($conn->query($sql) === TRUE) {
  echo "Libro agregado exitosamente.";
} else {
  echo "Error al agregar libro: ". $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Librería</title>
</head>
<body>
  <h1>Librería</h1>
  <p>Libro agregado exitosamente.</p>
  <a href="index.php">Volver</a>
</body>
</html>
  

