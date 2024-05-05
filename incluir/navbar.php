<?php
include "header.php";
?>

<nav class="navbar navbar-expand-lg" style="background-color: #e6e6ff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../imagenes/Logo_Farmacia.png" alt="Bootstrap" width="60" height="60">
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menú
          </a>
          <?php
          if($_SESSION["tipo"]=='Administrador'){
              ?>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../vistas/inicio.php">Inicio</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../vistas/dashboard.php">Dashboard</a></li>
              <li><a class="dropdown-item" href="../vistas/compras.php">Compras</a></li>
              <li><a class="dropdown-item" href="../vistas/devoluciones.php">Devoluciones</a></li>
              <li><a class="dropdown-item" href="../vistas/ventas.php">Ventas</a></li>
              <li><a class="dropdown-item" href="../vistas/productos.php">Productos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../vistas/proveedores.php">Proveedores</a></li>
              <li><a class="dropdown-item" href="../vistas/facturas.php">Facturas</a></li>
              <li><a class="dropdown-item" href="../vistas/usuarios.php">Usuarios</a></li>
              <li><a class="dropdown-item" href="../incluir/contacto.php"><br>Contactar Soporte Técnico</a></li>
            </ul>

          <?php
          }else{
            ?>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../vistas/inicio.php">Inicio</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../vistas/dashboard.php">Dashboard</a></li>
              <li><a class="dropdown-item" href="../vistas/compras.php">Compras</a></li>
              <li><a class="dropdown-item" href="../vistas/devoluciones.php">Devoluciones</a></li>
              <li><a class="dropdown-item" href="../vistas/ventas.php">Ventas</a></li>
              <li><a class="dropdown-item" href="../vistas/productos.php">Productos</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../incluir/contacto.php"><br>Contactar Soporte Técnico</a></li>
            </ul>

            <?php
          } ?>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"> Usuario: <?php echo $_SESSION["usuario"];  ?> </a>
        </li>
      </ul>
      <a class="btn btn-danger" href="../incluir/logout.php" style="background-color:#c25555">Cerrar Sesión</a>
    </div>
  </div>
</nav>
<section>
        <h1 style="color:white"><?php echo $_SESSION["tipo"];?></h1>
</section>