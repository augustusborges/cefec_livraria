<?php

namespace App\Models\DAO;

use App\Models\Entidades\Usuario;

class UsuarioDAO extends BaseDAO
{
    
    public function verificaEmail($email){
        try {

            $query = $this->select(
                "SELECT * FROM usuario WHERE usuarioEmail = '$email' "
            );

            return $query->fetch();

        }catch (Exception $e){
            throw new \Exception("Erro no acesso aos dados.", 500);
        }
    }

    public  function salvar(Usuario $usuario){
        try {
            $nome      = $usuario->getNome();
            $email     = $usuario->getEmail();
            $senha     = $usuario->getSenha();
            $telefone     = $usuario->getTelefone();
            $dataNascimento     = $usuario->getDataNascimento();
            return $this->insert(
                'usuario',
                ":usuarioNome,:usuarioEmail, :usuarioSenha, :usuarioTelefone, :usuarioDataNascimento",
                [
                    ':usuarioNome'=>$nome,
                    ':usuarioEmail'=>$email,
                    ':usuarioSenha'=>$senha,
                    ':usuarioTelefone'=>$telefone,
                    ':usuarioDataNascimento'=>$dataNascimento
                ]
            );

        }catch (\Exception $e){
            throw new \Exception($e, 500);
            //throw new \Exception("Erro na gravação de dados.", 500);
        }
    }
}