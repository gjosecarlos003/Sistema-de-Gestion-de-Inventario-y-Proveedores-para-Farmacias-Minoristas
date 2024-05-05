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
                        <div class="title">Devoluciones</div>
                    </div>
                    </div>
                    <div class="level-right">
                    <a class="btn btn-secondary" style="margin-right:20px" href="devoluciones.php" role="button">Imprimir</a>
                    <a class="btn btn-primary" href="devoluciones.php" role="button">+ Nueva Devolución</a>
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
                            <th scope="col">Fecha</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Nombre Cliente</th>
                            <th scope="col">Id Producto</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>21/08/2023</td>
                            <td>1</td>
                            <td>Cliente</td>
                            <td>Alberto Domínguez</td>
                            <td>ABC-abc-1234</td>
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
                            <td>22/08/2023</td>
                            <td>3</td>
                            <td>Cliente</td>
                            <td>Manuel Soriano</td>
                            <td>DDF-ddf-4321</td>
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