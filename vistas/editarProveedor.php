<?php session_start();
include "../incluir/header.php";

if($_SESSION['tipo']!='Administrador'){
    header("location: ../incluir/logout.php");
}
require "../incluir/db.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM proveedor WHERE id_proveedor = '$id'";
    $resultado = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($resultado);
}

if(isset($_POST["submit"])){
    $nombre = $_POST['nombre'];
    $periodo = $_POST["periodo"];
    $modo = $_POST["modo"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    if($_POST["estatus"]==1){
        $estatus = "Activo";
    }else{
        $estatus = "Inactivo";
    }

    $query = "UPDATE proveedor SET nombre_proveedor='$nombre', periodo_pago='$periodo', modo_pago='$modo', estatus='$estatus', telefono_proveedor='$telefono', correo_proveedor='$correo' WHERE id_proveedor='$id'";
    $resultado = mysqli_query($conn, $query);
    echo"<script> alert('Proveedor Actualizado Correctamente'); window.location.replace('proveedores.php'); </script>";
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
                    <div class="title">Editar Proveedor</div>  
                    </div>
                    </div>
                    <div class="level-right">
                    <a class="btn btn-danger" style="margin-right:20; background-color:#c25555" href="proveedores.php" role="button">Regresar</a>
                    <div class="level-item">
                    </div>
                    </div>
                </div>

                <form class="needs-validation" novalidate method="post">
                <div class="row">
                    <div class="col">
                    <label for="nombre">Nombre del Proveedor</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre_proveedor']?>" required>
                    </div>
                    <div class="col">
                    <label for="periodo">Periodo de Pago</label>
                    <input type="number" class="form-control" name="periodo"value="<?php echo $row['periodo_pago']?>" required>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col">
                    <label for="modo">Modo de Pago</label>
                    <input type="text" class="form-control" name="modo" value="<?php echo $row['modo_pago']?>" required>
                    </div>
                    <div class="col">
                    <label type="dropdown"for="estatus">Estatus</label>
                        <select class="form-select" name="estatus" required>
                            <option value="">Seleccionar</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" value="<?php echo $row['telefono_proveedor']?>" required>
                    </div>
                    <div class="col">
                    <label for="correo">Correo</label>
                    <input type="text" class="form-control" name="correo" value="<?php echo $row['correo_proveedor']?>" required>
                    </div>
                </div>
                <button class="btn btn-primary" style="margin-top: 20px" type="submit" name="submit">Actualizar</button>
                </form>
                </main>
            </div>
        </div>
    </section>
</body>

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