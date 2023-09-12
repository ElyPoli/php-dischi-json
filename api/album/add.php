<?php

$form = $_POST; // salvo i dati in un variabile

$albums_list = file_get_contents(__DIR__ . "/../../db/albums_list.json"); // Leggo il file json
$add_album = json_decode($albums_list, true); // Converto la stringa in un array associativo

$add_album[] = $form; // push dei dati ricevuti nell'array

// Converto l'array in una stringa e sovrascrivo il file nel db
$albums_list = json_encode($add_album, JSON_PRETTY_PRINT);
file_put_contents(__DIR__ . "/../../db/albums_list.json", $albums_list);

header("Content-Type: application/json"); // Specifico il tipo di contenuto
echo $albums_list;
?>