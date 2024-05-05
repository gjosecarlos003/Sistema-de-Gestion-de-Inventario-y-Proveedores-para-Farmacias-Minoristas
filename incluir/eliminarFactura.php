<?php session_start();
require "db.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM factura WHERE numero_factura = '$id'";
    $resultado = mysqli_query($conn, $query);
    echo"<script> alert('Factura Eliminada Correctamente'); window.location.replace('../vistas/facturas.php'); </script>";
}
?>