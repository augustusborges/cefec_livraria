<?php

    namespace App\Controllers;
    
    use App\Lib\Sessao;
    //use App\Models\DAO\LivroDAO;
    use App\Models\Entidades\Livro;

    class LivroController extends Controller{

        public function cadastro(){
            $this->render('/livro/cadastro');
 
            Sessao::limpaFormulario();
            Sessao::limpaMensagem();
        }
        
    }