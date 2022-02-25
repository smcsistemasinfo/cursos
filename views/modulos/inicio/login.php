<?php
use Curso\Controllers\UsuarioController;
if (isset($_POST['usuario']) && (isset($_POST['senha']))) {
    $login = new UsuarioController();
    echo $login->iniciaSessao();
}
?>
<div class="login-page">
    <div class="card">
        <div class="card-header bg-dark">
            <a href="<?= SERVERURL ?>inicio" class="brand-link">
                <img src="<?= SERVERURL ?>views/dist/img/logo.png" alt="Curso Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <h5><span class="brand-text font-weight-light">Gestão de Cursos</span></h5>
            </a>
        </div>
        <div class="card-body register-card-body">
            <p class="card-text"><span style="text-align: justify; display:block;"> Para iniciar sua sessão, faça login utilizando o usuário e senha cadastrados</span></p>
            <form action="" method="POST">
                <label>Usuário</label>
                <div class="input-group mb-3">
                    <input name="usuario" type="text" class="form-control" placeholder="Usuário" maxlength="7" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <label>Senha</label>
                <div class="input-group mb-3">
                    <input name="senha" type="password" class="form-control" placeholder="Senha" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="mb-0 text-left">
                <p class="mb-1">
                    <a href="<?= SERVERURL ?>recupera_senha">Esqueci minha senha</a>
                </p>
            </div>
        </div>
        <div class="card-footer bg-light-gradient text-center">
            <img src="<?= SERVERURL ?>views/dist/img/CULTURA_HORIZONTAL_pb_positivo.png" alt="logo cultura">
        </div>
    </div><!-- /.card -->
</div>