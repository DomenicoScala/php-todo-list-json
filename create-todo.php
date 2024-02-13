<?php

$allTodosJSON = file_get_contents('db/todos.json');

$allTodos = json_decode($allTodosJSON, true);

$newTodo = [
    'todo' => $_POST['todo'],
    'status' => false
];

$allTodos[] = $newTodo;

$allTodosNew = json_encode($allTodos);

file_put_contents('db/todos.json', $allTodosNew);

