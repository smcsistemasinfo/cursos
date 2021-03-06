<?php
namespace Curso\Models;

class UsuarioModel extends MainModel
{
    protected function getUsuario($dados) {
        $pdo = parent::connection();
        $sql = "SELECT * FROM usuarios
            WHERE nome = :nome AND senha = :senha";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":nome", $dados['nome']);
        $statement->bindParam(":senha", $dados['senha']);
        $statement->execute();
        return $statement;
    }

    protected function getEmail($dados) {
        $pdo = parent::connection();
        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":usuario", $dados['usuario']);
        $statement->execute();
        return $statement;
    }

    protected function getPerfil($codigo) {
        $consultaPerfil = parent::consultaSimples("SELECT id FROM perfis WHERE token = '$codigo' AND publicado = 1");

        if ($consultaPerfil->rowCount() > 0) {
            return $consultaPerfil->fetchObject()->id;
        } else {
            return false;
        }
    }

    protected function getExisteEmail($email){
        $query = "SELECT id, email  FROM pessoas WHERE email = '$email'";
        $resultado = DbModel::consultaSimples($query);
        return $resultado;
    }
}