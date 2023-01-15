<?php


$ispit_id = $_GET['ispit_id'];
$datum = $_GET['datum'];
$pocetak = $_GET['pocetak'];
$kraj = $_GET['kraj'];



$db = new mysqli("localhost", "root", "", "raspored");
$db_query = "insert into raspored (ispit_id, datum, pocetak, kraj) values ('" . $ispit_id . "', '" . $datum . "', '" . $pocetak . "', '" . $kraj . "')";
$db->query($db_query);
