<?php session_start();
include "../incluir/header.php";

if(($_SESSION['tipo']!='Administrador')&&($_SESSION['tipo']!='Usuario')){
    header("location: ../incluir/logout.php");
}

include("../incluir/db.php");
?>

<body>
    <?php 
        include "../incluir/navbar.php";?>
    <section>
        <div class="section" style="background-color: #e6e6ff;">
            <div class="columns">

                <?php include "../incluir/menu.php";?>

                <main class="column" style="background-color: #ffffff;">
                <div class="level">
                    <div class="level-left">
                    <div class="level-item">
                        <div class="title">Dashboard</div>
                    </div>
                    </div>
                    <div class="level-right">
                    <div class="level-item">
                    </div>  
                    </div>
                </div>
                <!-- Hasta aquí-->
                <?php
                if($_SESSION["tipo"]=='Administrador'){
                ?>
                <div class="columns is-multiline">
                    <div class="column">
                        <div class="box">
                            <img class="card-img-top" src="../imagenes/Orden.png" alt="Card image cap">
                            <h5 class="card-title"><br>Órdenes de Compra</h5>
                            <p class="card-text" style="text-align:right"><?php
                                $consulta = "SELECT * FROM venta_compra WHERE tipo = 'Compra'";
                                $resultado=mysqli_query($conn, $consulta);
                                echo mysqli_num_rows($resultado);
                            ?></p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="box">
                            <img class="card-img-top" src="../imagenes/Devolucion.png" alt="Card image cap">
                            <h5 class="card-title"><br>Devoluciones</h5>
                            <p class="card-text" style="text-align:right"><?php
                                $consulta = "SELECT * FROM devolucion";
                                $resultado=mysqli_query($conn, $consulta);
                                echo mysqli_num_rows($resultado);
                            ?></p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="box">
                            <img class="card-img-top" src="../imagenes/Venta.png" alt="Card image cap">
                            <h5 class="card-title"><br>Ventas</h5>
                            <p class="card-text" style="text-align:right"><?php
                                $consulta = "SELECT * FROM venta_compra WHERE tipo = 'Venta'";
                                $resultado=mysqli_query($conn, $consulta);
                                echo mysqli_num_rows($resultado);
                            ?></p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="box">
                            <img class="card-img-top" src="../imagenes/Inventario.png" alt="Card image cap">
                            <h5 class="card-title"><br>Productos</h5>
                            <p class="card-text" style="text-align:right"><?php
                                $consulta = "SELECT * FROM producto";
                                $resultado=mysqli_query($conn, $consulta);
                                echo mysqli_num_rows($resultado);
                            ?></p>
                        </div>
                    </div>
                </div>
                <div class="columns is-multiline">
                <div class="column">
                        <div class="box">
                            <img class="card-img-top" src="../imagenes/Proveedor.png" alt="Card image cap">
                            <h5 class="card-title"><br>Proveedores</h5>
                            <p class="card-text" style="text-align:right"><?php
                                $consulta = "SELECT * FROM proveedor";
                                $resultado=mysqli_query($conn, $consulta);
                                echo mysqli_num_rows($resultado);
                            ?></p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="box">
                            <img class="card-img-top" src="../imagenes/Factura.png" alt="Card image cap">
                            <h5 class="card-title"><br>Facturas</h5>
                            <p class="card-text" style="text-align:right"><?php
                                $consulta = "SELECT * FROM factura";
                                $resultado=mysqli_query($conn, $consulta);
                                echo mysqli_num_rows($resultado);
                            ?></p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="box">
                            <img class="card-img-top" src="../imagenes/Usuarios.png" alt="Card image cap">
                            <h5 class="card-title"><br>Usuarios</h5>
                            <p class="card-text" style="text-align:right"><?php
                                $consulta = "SELECT * FROM usuarios";
                                $resultado=mysqli_query($conn, $consulta);
                                echo mysqli_num_rows($resultado);
                            ?></p>
                        </div>
                    </div>
                    <div class="column">
                    </div>
                </div>
                <?php
                }else{
                ?>
                <div class="columns is-multiline">
                    <div class="column">
                        <div class="box">
                            <img class="card-img-top" src="../imagenes/Orden.png" alt="Card image cap">
                            <h5 class="card-title"><br>Órdenes de Compra</h5>
                            <p class="card-text" style="text-align:right"><?php
                                $consulta = "SELECT * FROM venta_compra WHERE tipo = 'Compra'";
                                $resultado=mysqli_query($conn, $consulta);
                                echo mysqli_num_rows($resultado);
                            ?></p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="box">
                            <img class="card-img-top" src="../imagenes/Devolucion.png" alt="Card image cap">
                            <h5 class="card-title"><br>Devoluciones</h5>
                            <p class="card-text" style="text-align:right"><?php
                                $consulta = "SELECT * FROM devolucion";
                                $resultado=mysqli_query($conn, $consulta);
                                echo mysqli_num_rows($resultado);
                            ?></p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="box">
                            <img class="card-img-top" src="../imagenes/Venta.png" alt="Card image cap">
                            <h5 class="card-title"><br>Ventas</h5>
                            <p class="card-text" style="text-align:right"><?php
                                $consulta = "SELECT * FROM venta_compra WHERE tipo = 'Venta'";
                                $resultado=mysqli_query($conn, $consulta);
                                echo mysqli_num_rows($resultado);
                            ?></p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="box">
                            <img class="card-img-top" src="../imagenes/Inventario.png" alt="Card image cap">
                            <h5 class="card-title"><br>Productos</h5>
                            <p class="card-text" style="text-align:right"><?php
                                $consulta = "SELECT * FROM producto";
                                $resultado=mysqli_query($conn, $consulta);
                                echo mysqli_num_rows($resultado);
                            ?></p>
                        </div>
                    </div>
                </div>
                <?php
                } ?>
                </main>
            </div>
        </div>
    </section>
</body>