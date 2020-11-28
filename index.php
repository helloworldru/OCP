<?php
include 'DataOperation.php';
include 'TxtFileOperation.php';
include 'Interaction.php';
include 'JsonFileOperation.php';

$interaction = new Interaction();

$dataTxt = $interaction->getData(new TxtFileOperation('file.txt'));

$dataJson = $interaction->getData(new JsonFileOperation('file.json'));

print_r($dataTxt);
echo "<br>";
echo "<br>";
print_r($dataJson);