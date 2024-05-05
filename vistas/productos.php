<?php session_start();
include "../incluir/header.php";

if(($_SESSION['tipo']!='Administrador')&&($_SESSION['tipo']!='Usuario')){
    header("location: ../incluir/logout.php");
}
?>

<body>
    <?php include "../incluir/navbar.php";?>
    <section>
        <div class="section" style="background-color: #e6e6ff;">
            <div class="columns">

                <?php include "../incluir/menu.php";?>

                <main class="column" style="background-color: #ffffff;">
                <div class="level">
                    <div class="level-left">
                    <div class="level-item">
                        <div class="title">Productos</div>
                    </div>
                    </div>
                    <div class="level-right">
                    <a class="btn btn-secondary" style="margin-right:20px" href="productos.php" role="button">Imprimir</a>
                    <a class="btn btn-primary" href="productos.php" role="button">+ Nuevo Producto</a>
                    <div class="level-item">
                    </div>
                    </div>
                </div>
                
                <div class="columns is-multiline">
                    <div class="column">
                    <div class="box">
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Código de Barra</th>
                            <th scope="col">Nombre Comercial</th>
                            <th scope="col">Contenido</th>
                            <th scope="col">Nombre Genérico</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Laboratorio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">ITBMS</th>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>ABC-abc-1234</td>
                            <td>Dexketoprofeno</td>
                            <td>25 mg</td>
                            <td>Enantyum</td>
                            <td>Tableta</td>
                            <td>Menarini</td>
                            <td>20</td>
                            <td>3.66</td>
                            <td>No</td>
                            <td>Dicarina</td>
                            <td>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Acción
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Editar</a></li>
                                    <li><a class="dropdown-item" href="#">Borrar</a></li>
                                </ul>
                                </li>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>DDF-ddf-4321</td>
                            <td>Acetaminofén/Cafeína</td>
                            <td>500mg/65mg</td>
                            <td>Panadol Ultra</td>
                            <td>Caja</td>
                            <td>GSK</td>
                            <td>3</td>
                            <td>3.42</td>
                            <td>No</td>
                            <td>Panamed</td>
                            <td>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Acción
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Editar</a></li>
                                    <li><a class="dropdown-item" href="#">Borrar</a></li>
                                </ul>
                                </li>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </main>
            </div>
        </div>
    </section>
</body>