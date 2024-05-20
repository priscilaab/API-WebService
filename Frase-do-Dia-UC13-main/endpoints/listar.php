<?php
require_once('../classes/Frase.class.php');
header('Content-Type: application/json');

$f = new Frase();
if(isset($_GET['aleatorio'])){
    $resultado = $f->ListarAleatoria();
}else{
$resultado = $f->ListarTodas();
}


//Mostrar o json:
echo json_encode($resultado);


// Verificar se aleatorio=1 :
//na url: ...listar.php?aleatorio=1


?>