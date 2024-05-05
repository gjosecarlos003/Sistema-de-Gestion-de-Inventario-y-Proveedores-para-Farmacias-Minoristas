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
                        <div class="title">Ventas</div>
                    </div>
                    </div>
                    <div class="level-right">
                    <a class="btn btn-secondary" style="margin-right:20px" href="ventas.php" role="button">Imprimir</a>
                    <a class="btn btn-primary" href="ventas.php" role="button">+ Nueva Venta</a>
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
                            <td>20/08/2023</td>
                            <td>2.99</td>
                            <td>1</td>
                            <td>ABC-abc-1234</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>21/08/2023</td>
                            <td>4.99</td>
                            <td>3</td>
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