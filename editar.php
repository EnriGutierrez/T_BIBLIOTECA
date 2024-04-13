<?php include 'config.php';?>

<?php
$id = $_GET["id"];

$sql = "SELECT * FROM libros WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
} else {
  echo "Error al obtener libro.";
  exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Librería</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <h1>Librería</h1>

  <h2>Editar libro</h2>
  <form action="actualizar.php" method="post">
  <div class="row g-3 align-items-center">
    <input type="hidden" name="id" value="<?php echo $row["id"];?>">
    <label for="codigo">Código:</label>
    <input type="text" name="codigo" id="codigo" value="<?php echo $row["codigo"];?>" required><br>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $row["nombre"];?>" required><br>
    <label for="autor">Autor:</label>
    <input type="text" name="autor" id="autor" value="<?php echo $row["autor"];?>" required><br>
    <label for="fecha_edicion">Fecha edición:</label>
    <input type="date" name="fecha_edicion" id="fecha_edicion" value="<?php echo $row["fecha_edicion"];?>" required><br>
    <label for="precio">Precio:</label>
    <input type="number" step="0.01" name="precio" id="precio" value="<?php echo $row["precio"];?>" required><br>
    <button type="submit">Actualizar</button>
    </div>
  </form>
</body>
</html>