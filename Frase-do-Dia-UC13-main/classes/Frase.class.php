<?php
require_once('Banco.class.php');

class Frase{
    // Atributos (propriedades):
    public $id;
    public $frase;
    public $filme;
    public $ano;

    public function ListarTodas(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM frases_filmes";
        $comando = $banco->prepare($sql);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }

    public function ListarAleatoria(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM frases_filmes ORDER BY RAND() LIMIT 1";
        $comando = $banco->prepare($sql);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
    // Efetuar correções:
    public function BuscarPorNomeFilme(){
        $banco = Banco::conectar();
        $sql = "SELECT * FROM frases_filmes WHERE filme LIKE CONCAT('%', ?, '%')";
        $comando = $banco->prepare($sql);
        $comando->execute(array($this->filme));
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
        Banco::desconectar();
        return $resultado;
    }
}


?>