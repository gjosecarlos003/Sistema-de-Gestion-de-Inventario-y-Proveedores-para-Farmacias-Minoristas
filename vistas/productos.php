<?php session_start();
include "../incluir/header.php";


if(($_SESSION['tipo']!='Administrador')&&($_SESSION['tipo']!='Usuario')){
    echo"<script> alert('Debe iniciar Sesión'); history.go(-1); </script>";
}

include("../incluir/db.php");

$consulta = "SELECT * FROM producto";
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
                        <div class="title">Productos</div>
                    </div>
                    </div>
                    <div class="level-right">
                    <a class="btn btn-secondary" style="margin-right:20px" href="proveedores.php" role="button">Imprimir</a>
                    <a class="btn btn-primary" href="nuevoProducto.php" role="button">+ Nuevo Producto</a>
                    <div class="level-item">
                    </div>
                    </div>
                </div>
                <div class="box">
                        <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Código de Barra</th>
                            <th>Nombre Comercial</th>
                            <th>Contenido</th>
                            <th>Nombre Genérico</th>
                            <th>Descripción</th>
                            <th>Laboratorio</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>ITBMS</th>
                            <th>Proveedor</th>
                            <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($resultado)){
                                ?>
                                <tr>
                                <td><?php echo $row['id_producto']?></td>
                                <td><?php echo $row['codigo_barra']?></td>
                                <td><?php echo $row['nombre_comercial']?></td>
                                <td><?php echo $row['contenido']?></td>
                                <td><?php echo $row['nombre_generico']?></td>
                                <td><?php echo $row['descripcion']?></td>
                                <td><?php echo $row['laboratorio']?></td>
                                <td><?php echo $row['cantidad']?></td>
                                <td><?php echo $row['precio']?></td>
                                <td><?php echo $row['itbms']?></td>
                                <td><?php echo $row['id_proveedor']?></td>
                                <td class="text-center">
                                    <a class="btn btn-info" href="editarProducto.php?id=<?php echo $row['id_producto'];?>" role="button">Editar</a>
                                    <a class="btn btn-danger" href="../incluir/eliminarProducto.php?id=<?php echo $row['id_producto'];?>" role="button">Eliminar</a></td>
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

<script>
    (function() {
    'use strict';
    window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
    }
    form.classList.add('was-validated');
    }, false);
    });
    }, false);
    })();
</script>