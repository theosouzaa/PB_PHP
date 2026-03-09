<?php

require_once "./database/database.php";

class Livro{
    private $titulo;
    private $autor;
    private $genero;

    public function __construct($titulo, $autor, $genero){
        $this-> titulo = $titulo;
        $this-> autor = $autor;
        $this-> genero = $genero;
    }

    public function salvar(){
        $pdo = Database::conectar();
        $sql = "INSERT INTO livros (titulo, autor, genero) VALUES (:titulo, :autor, :genero)";
        $stmt = $pdo->prepare($sql);
        $stmt -> execute(['titulo' => $this->titulo, 'autor' => $this->autor, 'genero' => $this->genero]);
    }

    public static function listar(){
        $pdo = Database::conectar();
        $stmt = $pdo->query("SELECT * FROM livros");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("SELECT * FROM livros WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("UPDATE livros SET titulo = :titulo, autor = :autor, genero = :genero WHERE id = :id");
        $stmt -> execute(['titulo' => $this->titulo, 'autor' => $this->autor, 'genero' => $this->genero, 'id' => $id]);
    }

    public static function excluir($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("DELETE FROM livros WHERE id = :id");
        $stmt -> execute(['id' => $id]);
    }
}