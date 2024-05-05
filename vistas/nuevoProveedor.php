<?php session_start();
include "../incluir/header.php";

if($_SESSION['tipo']!='Administrador'){
    header("location: ../incluir/logout.php");
}
require "../incluir/db.php";

if(isset($_POST["submit"])){
    $id = $_POST['id'];
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

    $query = "SELECT * FROM proveedor WHERE LOWER(nombre_proveedor)=LOWER('$nombre') OR id_proveedor=$id";
    $resultado = mysqli_query($conn, $query);
    $filas=mysqli_num_rows($resultado);

    if($filas){
        echo"<script> alert('Ese Proveedor ya existe'); history.go(-1); </script>";
    }else{
        $query = "INSERT INTO proveedor VALUES($id, '$nombre', '$periodo', '$modo', '$estatus', '$telefono', '$correo')";
        mysqli_query($conn, $query);
        echo"<script> alert('Proveedor Agregado Correctamente'); window.location.replace('proveedores.php'); </script>";
    }
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
                    <div class="title">Nuevo Proveedor</div>  
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
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre del Proveedor" required>
                    </div>
                    <div class="col">
                    <label for="periodo">Periodo de Pago (Meses)</label>
                    <input type="number" class="form-control" name="periodo" placeholder="Periodo de Pago" required>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col">
                    <label for="modo">Modo de Pago</label>
                    <input type="text" class="form-control" name="modo" placeholder="Modo de Pago" required>
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
                    <input type="text" class="form-control" name="telefono" placeholder="Teléfono" required>
                    </div>
                    <div class="col">
                    <label for="correo">Correo</label>
                    <input type="text" class="form-control" name="correo" placeholder="Correo" required>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col">
                    <label for="id">Id del Proveedor</label>
                    <input type="number" class="form-control" name="id" placeholder="Id del Proveedor" required>
                    </div>
                    <div class="col">
                    </div>
                </div>
                <button class="btn btn-primary" style="margin-top: 20px" type="submit" name="submit">Agregar</button>
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