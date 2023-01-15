<?php
include '../modeli/Raspored.php';



$raspored = new Raspored();
$raspored->obrisiStavku($_GET['stavka_id']);
