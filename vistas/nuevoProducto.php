<?php session_start();
include "../incluir/header.php";

if(($_SESSION['tipo']!='Administrador')&&($_SESSION['tipo']!='Usuario')){
    echo"<script> alert('Debe iniciar Sesión'); history.go(-1); </script>";
}
require "../incluir/db.php";

if(isset($_POST["submit"])){
    $codigo_barra = $_POST['codigo'];
    $nombre_comercial = $_POST["comercial"];
    $contenido = $_POST["contenido"];
    $nombre_generico = $_POST["generico"];
    $descripcion = $_POST["descripcion"];
    $laboratorio = $_POST["laboratorio"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];

    if($_POST["itbms"]==1){
        $itbms = "Sí";
    }else{
        $itbms = "No";
    }

    $nombre_proveedor = $_POST["proveedor"];
    $queryproveedor = mysqli_query($conn, "SELECT id_proveedor FROM proveedor WHERE nombre_proveedor LIKE '$nombre_proveedor%'");
    $filaselec = mysqli_fetch_array($queryproveedor);
    $id_proveedor= $filaselec['id_proveedor'];

        $query = "INSERT INTO producto SET codigo_barra='$codigo_barra', nombre_comercial='$nombre_comercial', contenido='$contenido', nombre_generico='$nombre_generico', descripcion='$descripcion', laboratorio='$laboratorio', cantidad='$cantidad', precio='$precio', itbms='$itbms', id_proveedor='$id_proveedor'";
        mysqli_query($conn, $query);
        echo"<script> alert('Producto Agregado Correctamente'); window.location.replace('productos.php'); </script>";
}
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
                    <div class="title">Nuevo Producto</div>  
                    </div>
                    </div>
                    <div class="level-right">
                    <a class="btn btn-danger" style="margin-right:20; background-color:#c25555" href="productos.php" role="button">Regresar</a>
                    <div class="level-item">
                    </div>
                    </div>
                </div>

                <form class="needs-validation" novalidate method="post">
                <div class="row">
                    <div class="col">
                    <label for="codigo">Código de Barra</label>
                    <input type="text" class="form-control" name="codigo" placeholder="Código de Barra" required>
                    </div>
                    <div class="col">
                    <label for="comercial">Nombre Comercial</label>
                    <input type="text" class="form-control" name="comercial" placeholder="Nombre Comercial" required>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col">
                    <label for="contenido">Contenido</label>
                    <input type="text" class="form-control" name="contenido" placeholder="Contenido" required>
                    </div>
                    <div class="col">
                    <label for="generico">Nombre Genérico</label>
                    <input type="text" class="form-control" name="generico" placeholder="Nombre Genérico" required>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Descripción" required>
                    </div>
                    <div class="col">
                    <label for="laboratorio">Laboratorio</label>
                    <input type="text" class="form-control" name="laboratorio" placeholder="Laboratorio" required>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" class="form-control" name="cantidad" placeholder="Cantidad" required>
                    </div>
                    <div class="col">
                        <label for="precio">Precio</label>
                        <input type="number" min="0.00" max="100000.00" step="0.01" class="form-control" name="precio" placeholder="Precio" required>
                        </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col">
                    <label type="dropdown"for="itbms">ITBMS</label>
                        <select class="form-select" name="itbms" required>
                            <option value="">Seleccionar</option>
                            <option value="1">Sí</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <div class="col">
                    <label type="dropdown"for="proveedor">Proveedor</label>
                        <select class="form-select" name="proveedor" onChange="getText(this);" required>
                            <option value="">Seleccionar</option>
                            <?php
                            while ($row = mysqli_fetch_assoc($resultado)){
                                ?>
                                <option><?php echo "{$row['nombre_proveedor']}"?></option>
                                <?php
                            }
                            ?>
                        </select>
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