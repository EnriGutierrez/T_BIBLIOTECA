<?php include 'config.php';?>

<?php
$id = $_POST["id"];
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$autor = $_POST["autor"];
$fecha_edicion = $_POST["fecha_edicion"];
$precio = $_POST["precio"];

$sql = "UPDATE libros SET codigo='$codigo', nombre='$nombre', autor='$autor', fecha_edicion='$fecha_edicion', precio='$precio' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Libro actualizado exitosamente.";
} else {
  echo "Error al actualizar libro: ". $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Librería</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Librería</h1>
  <p>Libro actualizado exitosamente.</p>
  <a href="index.php">Volver</a>
</body>
</html>