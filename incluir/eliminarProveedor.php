<?php session_start();
require "db.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM proveedor WHERE id_proveedor = '$id'";
    $resultado = mysqli_query($conn, $query);
    echo"<script> alert('Proveedor Eliminado Correctamente'); window.location.replace('../vistas/proveedores.php'); </script>";
}
?>