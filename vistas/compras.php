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
                        <div class="title">Órdenes de Compra</div>
                    </div>
                    </div>
                    <div class="level-right">
                    <a class="btn btn-secondary" style="margin-right:20px" href="compras.php" role="button">Imprimir</a>
                    <a class="btn btn-primary" href="compras.php" role="button">+ Nueva Orden</a>
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
                            <th scope="col">Monto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Id Producto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>17/08/2023</td>
                            <td>36.99</td>
                            <td>10</td>
                            <td>ABC-abc-1234</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>19/08/2023</td>
                            <td>44.88</td>
                            <td>60</td>
                            <td>DDF-ddf-4321</td>
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