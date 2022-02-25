<?php
$pedidoAjax = false;

require_once "config/configGeral.php";
require_once "config/autoload.php";

use Curso\Controllers\ViewsController;

$template = new ViewsController();

$template->exibirTemplate();