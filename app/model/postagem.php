<?php

    class Postagem
    {
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

        public static function selecionarPorId($idPost)
        {
            $conn = Connection::getConn();

            $sql = "SELECT * FROM postagem WHERE id = :id";
            $sql = $conn->prepare($sql);
            $sql->bindValue('');
            $sql->execute();

        }
    }