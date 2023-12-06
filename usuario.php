<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>usuario</title>
</head>
<body>
    <h1 class="text-center">bienvenido</h1>
    
  <?php
  include "modelo/conexion.php";
  session_start();

  $sesion=$_SESSION['cliente'];
  $datos=mysqli_query($conexion,"select * from usuario where usuario='$sesion'");

    while($consulta=mysqli_fetch_array($datos)){
        $rol = $consulta['rol'];

    }
    if($rol=="admin"){
        include 'admin.php';
        
    }elseif($rol=='empleado'){
        include 'empleado.php';
    }
  ?> 
</body>
</html>