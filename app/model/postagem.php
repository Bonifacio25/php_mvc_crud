<?php

    class Postagem
    {
        private $id;

        public static function selecionaTodos()
        {
            $conn = Connection::getConn();
            
            $sql ="SELECT * FROM postagem ORDER BY id DESC";
            $sql = $conn->prepare($sql);
            $sql->execute();

            $resultado = array();

            while($row = $sql->fetchObject('Postagem'))
            {
                $resultado[] = $row;
            }

            if(!$resultado)
            {
                throw new Exception("Não foi encontrado nenhum registro!");
            }

            return $resultado;
        }
    }