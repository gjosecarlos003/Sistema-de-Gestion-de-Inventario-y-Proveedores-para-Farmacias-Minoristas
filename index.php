<?php include "incluir/header.php" ?>

<!--Login Form-->
<section class="vh-100" style="background-color: #e6e6ff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../imagenes/Farmaceutica.jpg"
                alt="login form" width="950" height="950" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post" action="validar.php">

                <h2 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px; text-align: center; font-size: xx-large;" >Sistema de Gestión de Inventario y Proveedores</h2>
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #e6e6ff;"></i>
                    <span class="h1 fw-bold mb-0">
                    <img src='imagenes/Logo_Farmacia.png' alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
                    </span>
                  </div>
                  <h2 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px; font-size: x-large;">Iniciar Sesión</h2>

                  <div class="form-outline mb-4">
                    <input type="usuario" name="usuario" class="form-control form-control-lg" />
                    <label class="form-label" for="usuario">Usuario</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="field" name="contraseña" class="form-control form-control-lg" />
                    <label class="form-label" for="contraseña">Contraseña</label>
                    
                    <label style="float:right">
                    Mostrar Contraseña
                    <input type="checkbox" onclick="showPwd()">
                    </label>
                  </div>

                    <script>
                        const showPwd = () =>{
                            let input = document.querySelector("#field")
                            if (input.type == "password"){
                                input.type = "text"
                            }else{
                                input.type = "password"
                            }
                        }

                    </script>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Iniciar</button>
                  </div>

                  <a class="small text-muted" href="incluir/contacto.php">Contactar Soporte Técnico</a>
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
