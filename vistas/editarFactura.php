<?php session_start();
include "../incluir/header.php";

if($_SESSION['tipo']!='Administrador'){
    header("location: ../incluir/logout.php");
}
require "../incluir/db.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM factura WHERE numero_factura = '$id'";
    $resultado = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($resultado);
}

if(isset($_POST["submit"])){
    $fecha_factura = $_POST['factura'];
    $fecha_pago = $_POST["pago"];
    $monto = $_POST["monto"];
    $nombre_proveedor = substr($_POST["proveedor"], 0, -22);
    $queryproveedor = mysqli_query($conn, "SELECT id_proveedor FROM proveedor WHERE nombre_proveedor LIKE '$nombre_proveedor%'");
    $filaselec = mysqli_fetch_array($queryproveedor);
    $id_proveedor= $filaselec['id_proveedor'];

    if($_POST["estatus"]==1){
        $estatus = "Pagado";
    }else{
        $estatus = "Pendiente";
    }
        $query = "UPDATE factura SET fecha_factura='$fecha_factura', fecha_pago='$fecha_pago', monto='$monto', estatus='$estatus', id_proveedor='$id_proveedor'";
        mysqli_query($conn, $query);
        echo"<script> alert('Factura Actualizada Correctamente'); window.location.replace('facturas.php'); </script>";
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
                    <div class="title">Editar Factura</div>  
                    </div>
                    </div>
                    <div class="level-right">
                    <a class="btn btn-danger" style="margin-right:20; background-color:#c25555" href="facturas.php" role="button">Regresar</a>
                    <div class="level-item">
                    </div>
                    </div>
                </div>

                <form class="needs-validation" novalidate method="post">
                <div class="row">
                    <div class="col">
                    <label for="factura">Fecha de la Factura</label>
                    <input type="date" class="form-control" name="factura" value="<?php echo $row['fecha_pago']?>" required>
                    </div>
                    <div class="col">
                    <label type="dropdown"for="proveedor">Proveedor</label>
                        <select class="form-select" name="proveedor" onChange="getText(this);" required>
                            <option value="">Seleccionar</option>
                            <?php
                            while ($row = mysqli_fetch_assoc($resultado)){
                                ?>
                                <option><?php echo "{$row['nombre_proveedor']}&nbsp&nbsp&nbsp-&nbsp&nbsp&nbsp{$row['periodo_pago']}"?> meses</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col">
                        <label for="monto">Monto</label>
                        <input type="number" min="0.00" max="100000.00" step="0.01" class="form-control" name="monto" value="<?php echo $row['monto']?>" required>
                        </div>    
                    <div class="col">
                    <label type="dropdown"for="estatus">Estatus</label>
                        <select class="form-select" name="estatus" required>
                            <option value="">Seleccionar</option>
                            <option value="1">Pagado</option>
                            <option value="2">Pendiente</option>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col">
                        <label for="pago">Fecha de Pago</label>
                        <input type="date" class="form-control" name="pago" value="<?php echo $row['fecha_pago']?>" required>
                    </div>
                    <div class="col">
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