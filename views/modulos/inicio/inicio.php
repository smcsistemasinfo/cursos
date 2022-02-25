<?php
use Curso\Controllers\Pessoa\FeriasController;

$url = SERVERURL.'api/departamento_supervisao.php';
$urlPdfs = SERVERURL.'api/gerar_pdfs_ferias.php';

$feriasObj = new FeriasController();
$busca = false;

if (isset($_POST['_method'])) {
    unset($_POST['_method']);
    $departamento_id = $_POST['departamento_id'];
    $resultados = $feriasObj->listar($_POST);
    foreach ($_POST as $key => $pesquisa) {
        if ($pesquisa !== "") {
            $dado = str_replace('.', 'p', str_replace('/', 'b', str_replace('-', 't', $pesquisa)));
        }
    }
    $busca = true;
}
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Boas vindas ao CURSOS</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        Start
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
