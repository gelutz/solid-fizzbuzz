<?php

include './Regras/RegraDeMod.php';
include './Classes/Replacer.php';
include './Classes/Counter.php';

// Criando as regras para o replacer
$regraTres  = new RegraDeMod(3, "Tres");
$regraCinco = new RegraDeMod(5, "Cinco");
$regraPimba = new RegraDeMod(15, "Pimba");

$replacer   = new Replacer();

$regras = [
    $regraTres,
    $regraCinco,
    $regraPimba
];

$replacer->addRegras( $regras );

$counter = new Counter(1, 100, $replacer);
$all = $counter->fullCount();
?>