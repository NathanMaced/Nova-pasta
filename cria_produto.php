<?php

include_once 'produto.php';

$valor = new Produto();

$valor->Codigo = 5932;

$valor->Descricao = "Número do meu telefone";

echo $valor->Codigo . " - ". $valor->Descricao;

?>