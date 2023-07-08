<?php

    abstract class Connection
    {
        private static $conn;

        public static function getConn()
        {
            if(self::$conn == null)
            {
                self::$conn = New PDO('mysql: host=localhost; dbname=php_mvc_crud;', 'root', '');
            }
            
            return self::$conn;
        }
    }