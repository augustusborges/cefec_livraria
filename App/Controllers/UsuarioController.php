<?php
    namespace App\Controllers;
 
    use App\Lib\Sessao;
    use App\Models\DAO\UsuarioDAO;
    use App\Models\Entidades\Usuario;
 
    class UsuarioController extends Controller{
        
        public function cadastro(){
            $this->render('/usuario/cadastro');
 
            Sessao::limpaFormulario();
            Sessao::limpaMensagem();
        }
 
        public function salvar(){
            $Usuario = new Usuario();
            $Usuario->setNome($_POST['nome']);
            $Usuario->setEmail($_POST['email']);
            $Usuario->setSenha($_POST['senha']);
            $Usuario->setTelefone($_POST['telefone']);
            $Usuario->setDataNascimento($_POST['dataNascimento']);
 
            Sessao::gravaFormulario($_POST);
 
            $usuarioDAO = new usuarioDAO();
 
            if($usuarioDAO->verificaEmail($_POST['email'])){
                Sessao::gravaMensagem("Email existente");
                $this->redirect('/usuario/cadastro');
            }
 
            if($usuarioDAO->salvar($Usuario)){
                $this->redirect('/usuario/sucesso');
            }else{
                Sessao::gravaMensagem("Erro ao gravar");
            }
        }
     
        public function sucesso(){
            if(Sessao::retornaValorFormulario('nome')) {
                $this->render('/usuario/sucesso');
 
                Sessao::limpaFormulario();
                Sessao::limpaMensagem();
            }else{
                $this->redirect('/');
            }
        }
 
        public function index(){
            $this->redirect('/usuario/cadastro');
        }
    }
?>    