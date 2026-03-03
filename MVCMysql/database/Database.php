<?php

class Database {
    private static $pdo;

    public static function conectar(){
        if(!self::$pdo){
            try {
                self::$pdo = new PDO(
                    'mysql:host=127.0.0.1;
                    dbname=MVC_usuario;
                    charset=utf8',
                    'root',
                    '');
                self::$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erro ao conectar ao banco de dados: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}