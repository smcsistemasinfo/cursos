<?php
    if (isset($_POST['email']) && (isset($_POST['senha']))) {
        require_once "./controllers/UsuarioController.php";
        $login = new UsuarioController();
        echo $login->iniciaSessao();
    }
?>
<!-- /.content-header -->
<div class="login-page">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-1 col-lg-10">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <a href="<?= SERVERURL ?>inicio" class="brand-link">
                                <img src="<?= SERVERURL ?>views/dist/img/SisContrat.png" alt="CUrsos Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                                <span class="brand-text font-weight-light"><?= NOMESIS ?> - Cadastro de Artistas e Profissionais de Arte e Cultura</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <p class="card-text"><span style="text-align: justify; display:block;">
                                        Este sistema tem por objetivo criar um ambiente para credenciamento de artistas e profissionais de arte e cultura a fim de agilizar os processos de contratação artística em eventos realizados pela Secretaria Municipal de Cultura de São Paulo.</span></p>
                                    <p class="card-text"><span style="text-align: justify; display:block;">
                                        Uma vez cadastrados, esses artistas poderão atualizar suas informações e enviar a documentação necessária para o processo de contratação. Como o sistema possui ligação direta com o sistema da programação, a medida que o cadastro do artista no CAPAC encontra-se atualizado, o processo de contratação consequentemente é agilizado.</span></p>
                                    <p class="card-text">Podem se cadastrar artistas ou grupos artísticos, como pessoa física ou jurídica.</p>
                                    <p class="card-text">Dúvidas entre em contato com o setor responsável por sua contratação.</p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="#">
                                                        <div class="btn disabled info-box bg-purple" id="inscreverEvento" data-toggle="tooltip" data-placement="top" title="Em Breve">
                                                            <span class="info-box-icon"><i class="fas fa-file"></i></span>
                                                            <div class="card-body">
                                                                <span class="info-box-number">Quero Inscrever Meu Evento</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/igsiscapac"
                                                       target="_blank">
                                                        <div class="info-box bg-cyan">
                                                            <span class="info-box-icon"><i class="fas fa-users"></i></span>
                                                            <div class="card-body">
                                                                <span class="info-box-number">Sou Proponente de Emenda Parlamentar</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/igsiscapac"
                                                       target="_blank">
                                                        <div class="info-box bg-olive">
                                                            <span class="info-box-icon"><i class="fas fa-thumbs-up"></i></span>
                                                            <div class="card-body">
                                                                <span class="info-box-number">Sou Contratado</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="script_importacao_parte1">
                                                        <div class="info-box bg-maroon">
                                                            <span class="info-box-icon"><i class="fas fa-theater-masks"></i></span>
                                                            <div class="card-body">
                                                                <span class="info-box-number">Fomentos</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/igsiscapac"
                                                       target="_blank">
                                                        <div class="info-box bg-orange">
                                                            <span class="info-box-icon"><i class="fas fa-guitar"></i></span>
                                                            <div class="card-body">
                                                                <span class="info-box-number">Oficineiros</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <div class="btn info-box bg-teal" id="formacao">
                                                        <span class="info-box-icon"><i class="fas fa-child"></i></span>
                                                        <div class="card-body">
                                                            <span class="info-box-number">Formação</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.login-card-body -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light-gradient text-center">
                            <img src="<?= SERVERURL ?>views/dist/img/CULTURA_HORIZONTAL_pb_positivo.png" alt="logo cultura">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Formação -->
<div class="modal fade" id="modalFormacao" style="display: none" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ações (Expressões Artístico-culturais)</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" style="text-align: left;">
                Aeoo
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-theme" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#formacao').on('click', function () {
        $('#modalFormacao').modal();
    });

    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>