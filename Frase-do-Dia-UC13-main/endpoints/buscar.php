<?php

// Receber o nome do filme por get e retornar o resultado em json:
require_once('../classes/Frase.class.php');
header('Content-Type: application/json');

// buscar.php?q=Homem

//Iniciar com um array vazio:
$resultado = [];

if(isset($_GET['q'])){
    //Realizar a busca:
    $f = new Frase();
    $f->filme = $_GET['q'];
    $resultado = $f->BuscarPorNomeFilme();
}

//Mostrar Json:
echo json_encode($resultado);

?>