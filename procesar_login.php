<?php
include "modelo/conexion.php";

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$verificacion=mysqli_query($conexion, "select * from usuario where usuario='$usuario' and contrasena='$contrasena'");
$fila= mysqli_num_rows($verificacion);

if($fila>0){
    session_start();
    $_SESSION['cliente'] =$usuario;
    header('location:usuario.php');
}else{
    echo"
    <script>
    alert ('no se encontro la cuenta');
    location.href = 'login.php';
    </script>
    
    ";
}
?>