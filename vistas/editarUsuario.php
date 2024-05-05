<?php session_start();
include "../incluir/header.php";

if($_SESSION['tipo']!='Administrador'){
    header("location: ../incluir/logout.php");
}
require "../incluir/db.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM usuarios WHERE idusuarios = '$id'";
    $resultado = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($resultado);
}

if(isset($_POST["submit"])){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST["contraseña"];
    $nombre = $_POST["nombre"];
    if($_POST["tipo"]==1){
        $tipo = "Administrador";
    }else{
        $tipo = "Usuario";
    }
    $query = "UPDATE usuarios SET usuario = '$usuario', contraseña = '$contraseña', nombre = '$nombre', tipo_usuario = '$tipo' WHERE idusuarios='$id'";
    $resultado = mysqli_query($conn, $query);
    echo"<script> alert('Usuario Actualizado Correctamente'); window.location.replace('usuarios.php'); </script>";
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
                    <div class="title">Editar Usuario</div>  
                    </div>
                    </div>
                    <div class="level-right">
                    <a class="btn btn-danger" style="margin-right:20; background-color:#c25555" href="usuarios.php" role="button">Regresar</a>
                    <div class="level-item">
                    </div>
                    </div>
                </div>

                <form class="needs-validation" novalidate method="post">
                <div class="row">
                    <div class="col">
                    <label for="usuario">Nombre de Usuario</label>
                    <input type="text" class="form-control" name="usuario" value="<?php echo $row['usuario']?>" required>
                    </div>
                    <div class="col">
                    <label for="contraseña">Contraseña</label>
                    <input type="text" class="form-control" name="contraseña" value="<?php echo $row['contraseña']?>" required>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']?>" required>
                    </div>
                    <div class="col">
                    <label for="tipo">Tipo de Usuario</label>
                        <select class="form-control" name="tipo" required>
                            <option value="">Seleccionar</option>
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                        </select>
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