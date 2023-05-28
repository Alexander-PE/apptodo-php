<?php

try {
  $conn = new PDO('mysql:host=localhost;dbname=todoapp', 'root', '');
} catch (PDOException $e) {
  echo 'error de conexion';
}

if (isset($_POST['id'])) {
  $id = $_POST['id'];
  $completado = (isset($_POST['completada'])) ? 1 : 0;

  $sql = 'update tareas set completada=? where id=?';
  $sentencia = $conn->prepare($sql);
  $sentencia->execute([$completado, $id]);

}

if (isset($_POST['agregar_tarea'])) { // agregar_tarea es el nombre del boton tipo submit
  $tarea = $_POST['tarea']; // el nombre del input
  $sql = 'insert into tareas (tarea) value(?)'; // sentencia sql
  $sentencia = $conn->prepare($sql);
  $sentencia->execute([$tarea]);
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = 'delete from tareas where id=?';
  $sentencia = $conn->prepare($sql);
  $sentencia->execute([$id]);
}


$sql = 'SELECT * FROM tareas';
$registros = $conn->query($sql);


?>