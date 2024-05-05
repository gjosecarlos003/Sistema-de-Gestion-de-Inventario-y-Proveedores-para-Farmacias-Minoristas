<?php
include "../incluir/header.php";
?>

<!--Login Form-->
<section class="vh-100" style="background-color: #e6e6ff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../imagenes/Contacto.png"
                alt="login form" width="1100" height="1100" class="img-fluid" style="border-radius: 1rem 0 0 1rem; text-align: center;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post" action="../vistas/dashboard.php">

                <h2 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px; text-align: center; font-size: xx-large;" >Contáctanos</h2>
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #e6e6ff;"></i>
                  </div>
                    <?php
                        if(isset($errorLogin)){
                            echo "<font color='red'> $errorLogin </font>";
                        }
                    ?>

                  <div class="form-outline mb-4">
                    <input type="user" name="txtusuario" class="form-control form-control-lg" />
                    <label class="form-label" for="txtusuario">Nombre</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="txtpassword" class="form-control form-control-lg" />
                    <label class="form-label" for="txtpassword">Correo</label>
                  </div>

                  <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <label class="form-label" for="txtpassword">Mensaje</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg" type="submit">Enviar</button>
                  </div>

                  <a class="small text-muted" href="javascript:history.back()">Volver</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Aquí termina Login Form-->
</body>
</html>
