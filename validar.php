<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include("incluir/db.php");

$consulta="SELECT * FROM usuarios WHERE LOWER(usuario)=LOWER('$usuario') AND contraseña='$contraseña'";
$resultado=mysqli_query($conn, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    $fila=mysqli_fetch_row($resultado);
    $_SESSION["usuario"] = $fila[3];
    $_SESSION["tipo"] = $fila[4];
    $_SESSION['maximos'] = 5;
    header("location: vistas/inicio.php");
}else{
    echo "<script> alert('Error en la autenticación');  history.go(-1); </script>";
}

mysqli_free_result($resultado);
mysqli_close($conn);