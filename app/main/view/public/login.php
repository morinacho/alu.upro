<div class="row justify-content-center mt-3">
    <div class="col-lg-4 col-md-6 col-sm-8 mt-5">
        <div class="card">
            <img src="<?php echo URL_ROUTE ?>media/system/images/upro-logo.png" class="card-img-top pt-2 pb-5">
            <div class="card-body">
                <form action="<?php echo URL_ROUTE ?>auth/login" method="post">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text material-icons">person</div>
                        </div>
                        <input type="text" class="form-control" id="username" name="user-name" placeholder="Ingresar nombre de usuario">
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <div class="input-group-text material-icons">lock</div>
                        </div>
                        <input type="password" class="form-control" id="password" name="user-password" placeholder="********">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" id="login-button" class="btn btn-primary btn-block" name="login">Iniciar Sesión</button>
                    </div>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-center" href="<?php echo URL_ROUTE ?>auth/forgotPassword">Olvidaste tu contraseña?</a>
            </div>
        </div>
    </div>
</div>