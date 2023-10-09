<div class="container mt-5">
    <div class="row mt-5 mb-5 justify-content-md-center">
        <div class="col-5">
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-danger text-center" style="border: 1px solid #b46059; color: #b46059 ">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>

            <br><br>
            <div class="d-flex justify-content-center align-items-center" >
                <?php if (session()->perfil_id == 1) : ?>
                    <img class="img-fluid" height="300px" width="300px" src="<?php echo base_url('assets/img/admin.png'); ?>">
                <?php elseif (session()->perfil_id == 2) : ?>
                    <img class="img-fluid" height="300px" width="300px" src="<?php echo base_url('assets/img/cliente.png'); ?>">
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>
