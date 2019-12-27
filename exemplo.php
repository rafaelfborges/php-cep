<?php
    require_once "vendor/autoload.php";
    use Red\PhpCep\Search;

    $busca = new Search();

    $resultado = $busca->getAddressFromZipcode('83035170');

    print_r($resultado);