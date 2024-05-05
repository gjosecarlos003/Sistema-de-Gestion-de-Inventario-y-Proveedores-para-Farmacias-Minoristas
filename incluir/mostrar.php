<?php 
if(isset($_GET['mostrar'])){
    $id = $_GET['mostrar'];
    $_SESSION["maximos"] = $id;
    header("../vistas/usuarios.php");
}
?>