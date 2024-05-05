<?php session_start();
include "../incluir/header.php";

if(($_SESSION['tipo']!='Administrador')&&($_SESSION['tipo']!='Usuario')){
    header("location: ../incluir/logout.php");
}
?>

<body>
    <?php 
        include_once '../incluir/navbar.php';
    ?>

    <!-- Menú y Dashboard -->
    <section>
    <div class="section" style="background-color: #e6e6ff;">
            <div class="columns">
                <?php 
                    include_once '../incluir/menu.php';
                ?>
                <img src='../imagenes/Sistema_Inventario.png' alt="inicio" width="1100" height="1100" class="img-fluid" style="border-radius: 1rem 1rem 1rem 1rem;" />
            </div>
        </div>
    </section>
</body>
</html>
