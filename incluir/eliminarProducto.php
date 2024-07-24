<?php session_start();
require "db.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM producto WHERE id_producto = '$id'";
    $resultado = mysqli_query($conn, $query);
    echo"<script> alert('Producto Eliminado Correctamente'); window.location.replace('../vistas/productos.php'); </script>";
}
?>