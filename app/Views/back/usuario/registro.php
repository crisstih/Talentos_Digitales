<div class="container-fluid bg-color p-4 d-flex justify-content-center ">

<div class="container col-md-10 p-4 m-5 rounded">

  <div class="container row">

    <div class="text-center mb-5">
      <h2 class="text-center mt-5 titulos">Registrarse</h2>
      <div class="gif-container">
        <a href="<?php echo base_url('https://www.gifsanimados.org/cat-gatos-209.htm');?>"><img
            src="https://www.gifsanimados.org/data/media/209/gato-imagen-animada-0516.gif" border="0"
            alt="gato-imagen-animada-0516" /></a>
      </div>
    </div>

  </div>

  <!--form de registro -->

  <?php $validation = \Config\Services::validation();?>
  <form method="post" action="<?php echo base_url('enviar-form')?>">
    <?=csrf_field();?>
    <?=csrf_field();?>
    <?php if(!empty (session()->getFlashdata('fail'))):?>
    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
    <?php endif;?>
      <?php if(!empty (session()->getFlashdata('success'))):?>
      <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
      <?php endif?>

    
    <div class="row">
      <div class="form mb-3 col-md-6">
        <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
          <h4 class="titulos">Nombre</h4>
        </label>
        <input name="nombre" type="text" class="form-control borde-color bg-form" id="exampleFormControlInput1"
          placeholder="Ingrese nombre">

          <!--validacion-->
          <?php if($validation->getErrors('nombre')){?>
            <div class="alert alert-danger mt-2">
              <?= $error = $validation->getError('nombre');?>
            </div>
          <?php } ?>

      </div>

      <div class="mb-3 col-md-6">
        <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
          <h4 class="titulos">Apellido</h4>
        </label>
        <input  name="apellido" type="text" class="form-control borde-color bg-form" id="exampleFormControlInput1"
          placeholder="Ingrese apellido">

          <!--validacion-->
          <?php if($validation->getErrors('apellido')){?>
            <div class="alert alert-danger mt-2">
              <?= $error = $validation->getError('apellido');?>
            </div>
          <?php } ?>
      </div>

    </div>

    <div class="mt-4">
      <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
        <h4 class="titulos">Correo electrónico</h4>
      </label>
      <input  name="email" type="email" class="form-control borde-color bg-form" id="exampleFormControlInput1"
        placeholder="Ingrese correo electrónico">
        
        <!--validacion-->
        <?php if($validation->getErrors('email')){?>
            <div class="alert alert-danger mt-2">
              <?= $error = $validation->getError('email');?>
            </div>
          <?php } ?>
    </div>

    <div class="row mt-4">
      <div class="mb-3 col-md-6">
        <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
          <h4 class="titulos">Usuario</h4>
        </label>
        <input  name="usuario" type="text" class="form-control borde-color bg-form" id="exampleFormControlInput1"
          placeholder="Ingrese usuario">

          <!--validacion-->
          <?php if($validation->getErrors('usuario')){?>
            <div class="alert alert-danger mt-2">
              <?= $error = $validation->getError('usuario');?>
            </div>
          <?php } ?>
      </div>

      <div class="mb-3 col-md-6">
        <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
          <h4 class="titulos">Teléfono</h4>
        </label>
        <input  name="telefono" type="number" class="form-control borde-color bg-form" id="exampleFormControlInput1"
          placeholder="Ingrese número de teléfono">

          <!--validacion-->
          <?php if($validation->getErrors('telefono')){?>
            <div class="alert alert-danger mt-2">
              <?= $error = $validation->getError('telefono');?>
            </div>
          <?php } ?>
      </div>

    </div>

    <div class="mb-3 mt-4">
      <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
        <h4 class="titulos">Contraseña</h4>
      </label>
      <input  name="pass" type="password" class="form-control borde-color bg-form" id="exampleFormControlInput1"
        placeholder="Ingrese contraseña">

        <!--validacion-->
        <?php if($validation->getErrors('pass')){?>
            <div class="alert alert-danger mt-2">
              <?= $error = $validation->getError('pass');?>
            </div>
          <?php } ?>
    </div>

    <div class="mb-3 mt-5 button-container d-grid d-md-flex justify-content-md-end">
    <input type="submit"  value="Registrarse" class="btn btn-outline-danger btn-lg g-5">
      <input type="reset"  value="Cancelar" class="btn btn-warning btn-lg">
    </div>

    <div class="mt-3 text-center">
      <p class="parrafos">¿Ya tienes una cuenta? <a href="<?php echo base_url('login'); ?>" class="text-color">Inicia
          sesión</a></p>
    </div>

    </form>
  </div>

</div>