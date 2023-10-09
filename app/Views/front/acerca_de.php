<div class="container-fluid mt-4">
    <h1 class="titulos text-warning text-center mb-3">PETSHOP ABC cuenta con la venta de los siguientes productos:</h1>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h3 class="titulos text-center m-0">ALIMENTOS</h3>
                <img src="./assets\img\alimento.png" class="d-block w-50 m-auto rounded" alt="...">
            </div>
            <div class="carousel-item">
                <h3 class="titulos text-center m-0">ACCESORIOS</h3>
                <img src="./assets/img/accesorios.jpg" class="d-block w-50 m-auto rounded" alt="...">
            </div>

            <div class="carousel-item">
                <h3 class="titulos text-center m-0">MEDICAMENTOS</h3>
                <img src=".\assets\img\medicamentos.jpg" class="d-block w-50 m-auto rounded" alt="...">
            </div>
            <div class="carousel-item">
                <h3 class="titulos text-center m-0">JUGUETES</h3>
                <img src=".\assets\img\juguetes.png" class="d-block w-50 m-auto rounded" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<hr>

<div class="container-fluid p-4">

    <div class="container">

        <div class="text-center mb-3">
            <h2 class="text-color text-center mt-5 title-form titulos text-danger">Contactanos</h2>
            <div class="gif-container">
                <a href="<?php echo base_url('https://www.gifsanimados.org/cat-gatos-209.htm');?>"><img
                        src="https://www.gifsanimados.org/data/media/209/gato-imagen-animada-0516.gif" border="0"
                        alt="gato-imagen-animada-0516" /></a>
            </div>
        </div>

    </div>

    <div class="row">

        <div class=" col-sm-12 col-md-6">

            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
                    <h4 class="titulos">Nombre</h4>
                </label>
                <input type="text" class="form-control borde-color bg-form" id="exampleFormControlInput1"
                    placeholder="Ingrese nombre">
            </div>


            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
                    <h4 class="titulos">Correo</h4>
                </label>
                <input type="email" class="form-control borde-color bg-form" id="exampleFormControlInput1"
                    placeholder="Ingrese correo">
            </div>

            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
                    <h4 class="titulos">Asunto</h4>
                </label>
                <input type="text" class="form-control borde-color bg-form" id="exampleFormControlInput1"
                    placeholder="Ingrese asunto">
            </div>

            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label text-dark subtitle-form">
                    <h4 class="titulos">Mensaje</h4>
                </label>
                <textarea type="textarea" class="form-control borde-color bg-form" rows="4" cols="50"
                    id="exampleFormControlInput1" placeholder="Ingrese mensaje"></textarea>
            </div>

            <div class="mb-3 mt-5 button-container d-grid d-md-flex justify-content-md-center">
                <button type="button" class="btn btn-danger btn-lg g-5">Enviar</button>
            </div>
        </div>



        <div class="col-sm-12 col-md-6 d-flex flex-column align-items-center">
            <section class="text-center">
                <h2 class="text-danger titulos">NUESTRA UBICACIÓN</h2><span
                    class="material-symbols-outlined text-danger">location_on</span>
                <p class="text-danger parrafo">Corrientes, Capital 3400</p>
                <div class="container-fluid">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56638.236158018895!2d-58.81856!3d-27.4726912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1693026794737!5m2!1ses-419!2sar"
                        width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

        </div>

    </div>

</div>