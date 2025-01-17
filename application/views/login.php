<style>
    .card-body {
        margin-left: auto;
        margin-right: auto;
        display: block;
    }
</style>
<html class="h-100">
<body class="h-100">
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <img src="<?= base_url() ?>assets/images/logo_utp.png" alt="">
                                <h2 style="text-align: center;">Ingresa a tu cuenta</h2>

                                <form id="FRM_LOGIN" class="mt-5 mb-5 login-input" action="<?php echo base_url(); ?>Logincontrolador/iniciar_sesion" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Ingresa tu correo institucional" name="usuario_correo" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Ingresa tu contraseña" name="usuario_clave" required>
                                    </div>
                                    <div class="form-group">
                                        <a href="">
                                            <p class="title">¿Olvidaste tu contraseña?</p>
                                        </a>
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Ingresar</button>
                                </form>
                                <p class="mt-5 login-form__footer">¿Eres nuevo? <a href="<?= base_url() ?>RegistroControlador" class="text-primary">Registrate aquí</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>