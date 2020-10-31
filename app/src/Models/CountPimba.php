<?php

echo getcwd();

require_once getcwd().'/src/Classes/RegraDoTres.php';
require_once getcwd().'/src/Classes/RegraDoCinco.php';
require_once getcwd().'/src/Classes/RegraDoPimba.php';
require_once getcwd().'/src/Classes/Replacer.php';

$regraTres = new RegraDoTres();
$regraCinco = new RegraDoCinco();
$regraPimba = new RegraDoPimba();

$regras = [
	
	
];

$replacer = new Replacer( $regras );


?>