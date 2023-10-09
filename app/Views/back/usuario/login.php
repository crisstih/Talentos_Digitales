<div class="container-fluid p-4 d-flex justify-content-center ">

  <div class="container col-md-10 p-4 m-5 rounded">

    <div class="container row">

      <div class="text-center mb-3">
        <h2 class="text-color text-center mt-5 titulos">Iniciar sesión</h2>
        <div class="gif-container">
          <a href="<?php echo base_url('https://www.gifsanimados.org/cat-gatos-209.htm');?>"><img
              src="https://www.gifsanimados.org/data/media/209/gato-imagen-animada-0516.gif" border="0"
              alt="gato-imagen-animada-0516" /></a>
        </div>
      </div>

    </div>

    <!--mensaje de error-->
    <?php if(session()->getFlashdata('msg')):?>
      <div class="alert alert-success text-center">
          <?= session()->getFlashdata('msg')?>
      </div>
    <?php endif; ?>

    <!--formulario de login-->
    <form method ="post" action= "<?php echo base_url('enviarlogin'); ?>" >

      <div class="mb-3 mt-4">
        <label for="usuario" class="form-label text-dark subtitle-form">
          <h4 class="titulos">Usuario</h4>
        </label>
        <input name="usuario" type="text" class="form-control borde-color bg-form" id="usuario"
          placeholder="Ingrese usuario">
      </div>


      <div class="mb-3 mt-4">
        <label for="pass" class="form-label text-dark subtitle-form">
          <h4 class="titulos">Contraseña</h4>
        </label>
        <input name="pass" type="password" class="form-control borde-color bg-form" id="pass"
          placeholder="Ingrese contraseña">
      </div>

      <div class="button-container d-grid d-md-flex justify-content-md-end">
      <input type="submit" value="Ingresar" class="btn btn-outline-danger btn-lg g-5"> 
      <input type="reset"  value="Cancelar" class="btn btn-warning btn-lg ">
      </div>

      <div class="mt-3 text-center">
        ¿Aún no se registró? <a href="<?php echo base_url('/registro');?>" class="text-color parrafos"> Registrarse aquí</a>
      </div>
      </div>

    </form>

</div>