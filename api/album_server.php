<?php

$albums_list = file_get_contents(__DIR__ . "/../db/albums_list.json"); // Leggo il file json

header ("Content-Type: application/json"); // Specifico il tipo di contenuto

echo $albums_list;

?>