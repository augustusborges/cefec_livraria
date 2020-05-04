<?php

    namespace App\Models\Entidades;

    class Livro{

        private $id;
        private $titulo;
        private $subTitulo;
        private $isbn;
        private $edicao;
        private $numeroPaginas;
        private $precoCompra;
        private $precoVenda;
        private $quantidade;
        private $ano;

        public function getId(){
            return $this->id;
        }
    
        public function getTitulo(){
            return $this->Titulo;
        }
    
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function getSubTitulo(){
            return $this->SubTitulo;
        }
    
        public function setSubTitulo($subTitulo){
            $this->subTitulo = $subTitulo;
        }

        public function getISBN(){
            return $this->isbn;
        }
    
        public function setISBN($isbn){
            $this->isbn = $isbn;
        }        

        public function getEdicao(){
            return $this->edicao;
        }
    
        public function setEdicao($edicao){
            $this->edicao = $edicao;
        }     
        
        public function getNumeroDePaginas(){
            return $this->numeroPaginas;
        }
    
        public function setNumeroDePaginas($numeroPaginas){
            $this->numeroPaginas = $numeroPaginas;
        } 

        public function getPrecoDeCompra(){
            return $this->precoCompra;
        }
    
        public function setPrecoDeCompra($precoCompra){
            $this->precoCompra = $precoCompra;
        } 

        public function getPrecoDeVenda(){
            return $this->precoVenda;
        }
    
        public function setPrecoDeVenda($precoVenda){
            $this->precoVenda = $precoVenda;
        } 

        public function getQuantidade(){
            return $this->quantidade;
        }
    
        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        } 

        public function getAno(){
            return $this->ano;
        }
    
        public function setano($ano){
            $this->ano = $ano;
        } 


    }