<?php

use Curso\Controllers\UsuarioController;

$usuarioObj = new UsuarioController();
//$usuarioObj->gravarLog("Fez Logout");
$usuarioObj->forcarFimSessao();