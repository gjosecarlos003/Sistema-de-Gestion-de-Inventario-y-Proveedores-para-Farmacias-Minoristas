<?php session_start();
require "db.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM usuarios WHERE idusuarios = '$id'";
    $resultado = mysqli_query($conn, $query);
    echo"<script> alert('Usuario Eliminado Correctamente'); window.location.replace('../vistas/usuarios.php'); </script>";
}
?>