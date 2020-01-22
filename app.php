<?php
    namespace App;

    use App\Controllers\HomeController;
    use Exception;

    class App
    {
        private $controller;
        private $controllerFile;
        private $action;
        private $params;
        public  $controllerName;

        public function __construct(){
            
            //Constantes do sistema
            define('APP_HOST'       , $_SERVER['HTTP_HOST'] . "/cefec_livraria");
            define('PATH'           , realpath('./'));
            define('TITLE'          , "Gestão de Livraria");
            
            define('DB_HOST'        , "localhost");
            define('DB_USER'        , "root");
            define('DB_PASSWORD'    , "");
            define('DB_NAME'        , "devmedia");
            define('DB_DRIVER'      , "mysql");
        
            $this->url();
        }

        public function url () {
            
            if ( isset( $_GET['url'] ) ) {
                $path = $_GET['url'];
                $path = rtrim($path, '/');
                $path = filter_var($path, FILTER_SANITIZE_URL);
            
                $path = explode('/', $path);
            
                $this->controller  = $this->verificaArray( $path, 0 );
                $this->action      = $this->verificaArray( $path, 1 );
            
                if ( $this->verificaArray( $path, 2 ) ) {
                    unset( $path[0] );
                    unset( $path[1] );
                    $this->params = array_values( $path );
                }
            }
        }
    }

?>