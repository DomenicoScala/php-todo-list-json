<?php

$allTodosJSON = file_get_contents('db/todos.json');

header('Content-Type: application/json');

echo $allTodosJSON; 

