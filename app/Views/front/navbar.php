<!--Navbar-->

<?php
    $session = session();
    $nombre = $session->get('nombre');
    $perfil = $session->get('perfil_id');
    ?>


<nav id="navbar" class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img class="rounded-circle" src="assets/img/logo.png" alt="logo" width="120" height="90">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--navbar para administradores-->
        <?php if(session()->perfil_id==1):?>
        

        <div class="collapse navbar-collapse gap-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li>
            <div class="btn btn-dark btn-sm">
            <a href="" style="color:white">Admin:
                <?php echo session ('nombre');?>
            </a>
        </div>
            </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('login'); ?>">LOGIN</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('registro'); ?>">REGISTRARSE</a>
                </li>

                </ul>

                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('logout'); ?>">CERRAR SESIÓN</a>
                </li>


                </ul>
        </div>

        <!--navbar para clientes logueados-->

        <?php elseif(session()->perfil_id==2):?>
       

        <div class="collapse navbar-collapse gap-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li>
                <div class="btn-dark btn btn-sm">
            <a href="" style="color:white">Cliente:
                <?php echo session ('nombre');?>
            </a>
        </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('/'); ?>">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">SOBRE NOSOTROS</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        PRODUCTOS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Todos</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="#">Gatos</a></li>
                        <li><a class="dropdown-item" href="#">Perros</a></li>
                        <li><a class="dropdown-item" href="#">Hamsters</a></li>
                        <li><a class="dropdown-item" href="#">Peces</a></li>
                        <li>
                        </li>

                    </ul>
                </li>

                </ul>

                <form class="d-flex mb-2" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscador de productos"
                        aria-label="Search">
                    <button class="btn btn-warning" type="submit"><i class="fa-solid fa-magnifying-glass fa-beat"></i>
                        Buscar</button>
                </form>

                <a class="mb-2" href="<?php echo base_url('logout'); ?>" tabindex="-1">
                    <button class="btn btn-danger">
                        <i class="fa-solid fa-user fa-bounce"></i> Salir
                    </button>
                </a>
        
        </div>

        <!--navbar para clientes no logueados-->
        <?php else:?>
        <div class="collapse navbar-collapse gap-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('/'); ?>">HOME</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">SOBRE NOSOTROS</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        PRODUCTOS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Todos</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="#">Gatos</a></li>
                        <li><a class="dropdown-item" href="#">Perros</a></li>
                        <li><a class="dropdown-item" href="#">Hamsters</a></li>
                        <li><a class="dropdown-item" href="#">Peces</a></li>
                        <li>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">SOBRE NOSOTROS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('acerca_de'); ?>">ACERCA DE</a>
                </li>

                </ul>

                <form class="d-flex mb-2" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscador de productos"
                        aria-label="Search">
                    <button class="btn btn-warning" type="submit"><i class="fa-solid fa-magnifying-glass fa-beat"></i>
                        Buscar</button>
                </form>

                <a class="mb-2" href="<?php echo base_url('ingresar'); ?>">
                    <button class="btn btn-danger">
                        <i class="fa-solid fa-user fa-bounce"></i> Entrar
                    </button>
                </a>

            
            <?php endif; ?>
        </div>
        
    </div>

</nav>