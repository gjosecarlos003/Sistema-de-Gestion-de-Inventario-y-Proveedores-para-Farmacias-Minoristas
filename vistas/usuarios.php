<?php session_start();
include "../incluir/header.php";

if($_SESSION['tipo']!='Administrador'){
    header("location: ../incluir/logout.php");
}
include("../incluir/db.php");

$consulta = "SELECT * FROM usuarios";
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
                        <div class="title">Usuarios</div>
                    </div>
                    </div>
                    <div class="level-right">
                    <a class="btn btn-secondary" style="margin-right:20px" href="Usuarios.php" role="button">Imprimir</a>
                    <a class="btn btn-primary" href="nuevoUsuario.php" role="button">+ Nuevo Usuario</a>
                    <div class="level-item">
                    </div>
                    </div>
                </div>
                    <div class="box">
                        <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Tipo Usuario</th>
                            <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($resultado)){
                                ?>
                                <tr>
                                <td><?php echo $row['idusuarios']?></td>
                                <td><?php echo $row['usuario']?></td>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['tipo_usuario']?></td>
                                <td class="text-center">
                                    <a class="btn btn-info" href="editarUsuario.php?id=<?php echo $row['idusuarios'];?>" role="button">Editar</a>
                                    <a class="btn btn-danger" href="../incluir/eliminarUsuario.php?id=<?php echo $row['idusuarios'];?>" role="button">Eliminar</a></td>
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






