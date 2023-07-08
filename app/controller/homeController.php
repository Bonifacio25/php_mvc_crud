<?php

    class HomeController
    {
        public function index()
        {
            try {
                $colecPostagens = Postagem::selecionaTodos();
            
                echo'<pre>';
                var_dump($colecPostagens);

            } catch (Exception $e) {
                echo $e->getMessage();
            } 
        }
    }