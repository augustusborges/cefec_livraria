<?php
    namespace App\Controllers;
 
    use App\Lib\Sessao;
    use App\Models\DAO\PessoaDAO;
    use App\Models\Entidades\Pessoa;
 
    class UsuarioController extends Controller{
        
        public function cadastro(){
            $this->render('/pessoa/cadastro');
 
            Sessao::limpaFormulario();
            Sessao::limpaMensagem();
        }
 
        public function salvar(){
            $Pessoa = new Pessoa();
            $Pessoa->setNome($_POST['nome']);
            $Pessoa->setEmail($_POST['email']);
            $Pessoa->setSenha($_POST['senha']);
            $Pessoa->setTelefone($_POST['telefone']);
            $Pessoa->setDataNascimento($_POST['dataNascimento']);
 
            Sessao::gravaFormulario($_POST);
 
            $pessoaDAO = new PessoaDAO();
 
            if($pessoaDAO->verificaEmail($_POST['email'])){
                Sessao::gravaMensagem("Email existente");
                $this->redirect('/pessoa/cadastro');
            }
 
            if($pessoaDAO->salvar($Pessoa)){
                $this->redirect('/pessoa/sucesso');
            }else{
                Sessao::gravaMensagem("Erro ao gravar");
            }
        }
     
        public function sucesso(){
            if(Sessao::retornaValorFormulario('nome')) {
                $this->render('/pessoa/sucesso');
 
                Sessao::limpaFormulario();
                Sessao::limpaMensagem();
            }else{
                $this->redirect('/');
            }
        }
 
        public function index(){
            $this->redirect('/pessoa/cadastro');
        }
    }
?>    