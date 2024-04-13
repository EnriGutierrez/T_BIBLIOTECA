<?php include 'config.php';?>

<!DOCTYPE html>
<html>
<head>
  <title>Librería</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <p class="h1">Librería</p>

  <h2>Listado de libros</h2>
  <table class="table"  border="1">
    <tr class="table-danger">
      <th>Código</th>
      <th>Nombre</th>
      <th>Autor</th>
      <th>Fecha edición</th>
      <th>Precio $</th>
      <th>Acciones</th>
    </tr>
    <?php
    $sql = "SELECT * FROM libros";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
   ?>
    <tr>
      <td><?php echo $row["codigo"];?></td>
      <td><?php echo $row["nombre"];?></td>
      <td><?php echo $row["autor"];?></td>
      <td><?php echo $row["fecha_edicion"];?></td>
      <td><?php echo $row["precio"];?></td>
      <td>
        <a href="editar.php?id=<?php echo $row["id"];?>" class="">Editar</a>
        <a href="eliminar.php?id=<?php echo $row["id"];?>">Eliminar</a>
      </td>
    </tr>
    <?php
      }
    } else {
      echo "<tr><td colspan='6'>No hay libros registrados.</td></tr>";
    }
    $conn->close();
   ?>
  </table>

  <h2>Agregar libro</h2>
  <form action="agregar.php" method="post">
    <div class="row g-3 align-items-center">
      <div class="col-auto">
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" class="form-control" required  placeholder="De 1000 en adelante" ><br>
      </div>
      <div class="col-auto">
        <label for="nombre" >Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control"  required><br>
      </div>
      <div class="col-auto">
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" class="form-control" required><br>
      </div>
      <div class="col-auto">
        <label for="fecha_edicion">Fecha edición:</label>
        <input type="date" name="fecha_edicion" id="fecha_edicion" class="form-control" required><br>
      </div>
      <div class="col-auto">
       <label for="precio">Precio $:</label>
       <input type="number" step="0.01" name="precio" id="precio" class="form-control" required><br>
      </div>
      <div class="col-auto">
       <button type="submit" class="btn btn-success">Agregar</button>
      </div>
    </div>

  </form>
</body>
</html>