<?php
include "header.php";

if($_SESSION["tipo"]=='Administrador'){
    ?>
    <aside class="column is-2">
                <nav class="menu">
                    <p class="menu-label" style="font-weight: bold; font-size: large; color:black;">
                    General
                    </p>
                    <ul class="menu-list">
                    <li> <a href="../vistas/dashboard.php">Dashboard</a> </li>
                    <li><a href="../vistas/compras.php">Compras</a></li>
                    <li><a href="../vistas/devoluciones.php">Devoluciones</a></li>
                    <li><a href="../vistas/ventas.php">Ventas</a></li>
                    <li><a href="../vistas/productos.php">Productos</a></li>
                    </ul>
                    <p class="menu-label" style="font-weight: bold; font-size: large; color:black;">
                    <br>Administración
                    </p>
                    <ul class="menu-list">
                    <li><a href="../vistas/proveedores.php">Proveedores</a></li>
                    <li><a href="../vistas/facturas.php">Facturas</a></li>
                    <li><a href="../vistas/usuarios.php">Usuarios</a></li>
                    <li><a href="../incluir/contacto.php"><br><br>Contactar Soporte Técnico</a></li>
                </nav>
                </aside>
    <?php
}else{
    ?>
    <aside class="column is-2">
                <nav class="menu">
                    <p class="menu-label" style="font-weight: bold; font-size: large; color:black;">
                    General
                    </p>
                    <ul class="menu-list">
                    <li> <a href="../vistas/dashboard.php">Dashboard</a> </li>
                    <li><a href="../vistas/compras.php">Compras</a></li>
                    <li><a href="../vistas/devoluciones.php">Devoluciones</a></li>
                    <li><a href="../vistas/ventas.php">Ventas</a></li>
                    <li><a href="../vistas/productos.php">Productos</a></li>
                    </ul>
                    <p class="menu-label" style="font-weight: bold; font-size: large; color:black;">
                    <br>Ayuda
                    </p>
                    <ul class="menu-list">
                    <li><a href="../incluir/contacto.php"><br><br>Contactar Soporte Técnico</a></li>
                </nav>
                </aside>
    <?php
}
?>