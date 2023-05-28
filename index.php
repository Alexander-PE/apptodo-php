<?php include('agregarTarea.php'); ?>

<!doctype html>
<html lang="en">

<head>
  <title>Aplicacion TODO list</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main class="container">
    <br>
    <div class="card">
      <div class="card-header">
        Lista de tareas (TODO LIST)
      </div>
      <div class="card-body">
        <form action="" method='post'>
          <div class="mb-3">
            <label for="tarea" class="form-label">Tarea:</label>
            <input type="text" class="form-control" name="tarea" id="tarea" aria-describedby="helpId" placeholder="Escriba su tarea">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Agregar tarea</button>
          <!-- <input name="agregar_tarea" id="agregar_tarea" class="btn btn-primary" type="button" value="Agregar tarea"> -->
        </form>
      </div>
    </div>



  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>