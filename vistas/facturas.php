<?php session_start();
include "../incluir/header.php";

if($_SESSION['tipo']!='Administrador'){
    header("location: ../incluir/logout.php");
}

include("../incluir/db.php");

$consulta = "SELECT * FROM factura";
$resultado=mysqli_query($conn, $consulta);
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
                        <div class="title">Facturas</div>
                    </div>
                    </div>
                    <div class="level-right">
                    <a class="btn btn-secondary" style="margin-right:20px" href="facturas.php" role="button">Imprimir</a>
                    <a class="btn btn-primary" href="nuevaFactura.php" role="button">+ Nueva Factura</a>
                    <div class="level-item">
                    </div>
                    </div>
                </div>
                
                <div class="box">
                        <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Fecha de Creación</th>
                            <th>Fecha de Pago</th>
                            <th>Monto</th>
                            <th>Estatus</th>
                            <th>Proveedor</th>
                            <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($resultado)){
                                ?>
                                <tr>
                                <td><?php echo $row['numero_factura']?></td>
                                <td><?php echo $row['fecha_factura']?></td>
                                <td><?php echo $row['fecha_pago']?></td>
                                <td><?php echo $row['monto']?></td>
                                <td><?php echo $row['estatus']?></td>
                                <td><?php echo $row['id_proveedor']?></td>
                                <td class="text-center">
                                    <a class="btn btn-info" href="editarFactura.php?id=<?php echo $row['numero_factura'];?>" role="button">Editar</a>
                                    <a class="btn btn-danger" href="../incluir/eliminarFactura.php?id=<?php echo $row['numero_factura'];?>" role="button">Eliminar</a></td>
                                </tr>
                                <?php
                            }
                            ?>
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

<?php include "../incluir/footer.php" ?>