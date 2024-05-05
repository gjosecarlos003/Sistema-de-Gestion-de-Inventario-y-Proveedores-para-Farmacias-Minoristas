<?php session_start();
include "../incluir/header.php";


if($_SESSION['tipo']!='Administrador'){
    header("location: ../incluir/logout.php");
}

include("../incluir/db.php");

$consulta = "SELECT * FROM proveedor";
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
                        <div class="title">Proveedores</div>
                    </div>
                    </div>
                    <div class="level-right">
                    <a class="btn btn-secondary" style="margin-right:20px" href="proveedores.php" role="button">Imprimir</a>
                    <a class="btn btn-primary" href="nuevoProveedor.php" role="button">+ Nuevo Proveedor</a>
                    <div class="level-item">
                    </div>
                    </div>
                </div>
                <div class="box">
                        <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Periodo de Pago</th>
                            <th>Modo de Pago</th>
                            <th>Estatus</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($resultado)){
                                ?>
                                <tr>
                                <td><?php echo $row['id_proveedor']?></td>
                                <td><?php echo $row['nombre_proveedor']?></td>
                                <td><?php echo $row['periodo_pago']?> meses</td>
                                <td><?php echo $row['modo_pago']?></td>
                                <td><?php echo $row['estatus']?></td>
                                <td><?php echo $row['telefono_proveedor']?></td>
                                <td><?php echo $row['correo_proveedor']?></td>
                                <td class="text-center">
                                    <a class="btn btn-info" href="editarProveedor.php?id=<?php echo $row['id_proveedor'];?>" role="button">Editar</a>
                                    <a class="btn btn-danger" href="../incluir/eliminarProveedor.php?id=<?php echo $row['id_proveedor'];?>" role="button">Eliminar</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </section>
</body>

<?php include "../incluir/footer.php" ?>