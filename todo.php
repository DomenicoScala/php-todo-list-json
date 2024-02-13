<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With");


$allTodosJSON = file_get_contents('db/todos.json');

header('Content-Type: application/json');

echo $allTodosJSON; 

