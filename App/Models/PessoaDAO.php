<?php

namespace App\Models\DAO;

use App\Models\Entidades\Usuario;

class UsuarioDAO extends BaseDAO
{
    public function verificaEmail($email){
        try {

            $query = $this->select(
                "SELECT * FROM pessoa WHERE emailPessoa = '$email' "
            );

            return $query->fetch();

        }catch (Exception $e){
            throw new \Exception("Erro no acesso aos dados.", 500);
        }
    }

    public  function salvar(Pessoa $pessoa) {
        try {
            $nome      = $pessoa->getNome();
            $email     = $pessoa->getEmail();
            $senha     = $pessoa->getSenha();
            $telefone     = $pessoa->getTelefone();
            $dataNascimento     = $pessoa->getDataNascimento();
            return $this->insert(
                'pessoa',
                ":nomePessoa,:emailPessoa, :senhaPessoa, :telefonEPessoa, :dataNascimentoPessoa",
                [
                    ':nomePessoa'=>$nome,
                    ':emailPessoa'=>$email,
                    ':senhaPessoa'=>$senha,
                    ':telefonePessoa'=>$telefone,
                    ':dataNascimentoPessoa'=>$dataNascimento
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }
}