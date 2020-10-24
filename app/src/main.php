<?php 

require_once 'CountPimba.php';

$max = 100;
$breakpoints = [
    3 => "Três",
    5 => "Cinco",
    15 => "Pimba!"
];

$cp = new CountPimba($breakpoints, $max);

$cp->printValues();
?>