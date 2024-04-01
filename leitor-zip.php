<?php

// le arquivo zip
// echo file_get_contents('zip://arquivos_sem_senha.zip#lista-cursos2.txt');

$context = stream_context_create([
  'zip' => [
    'password' => '1234'
  ]
]);

echo file_get_contents('zip://arquivos_com_senha.zip#lista-cursos2.txt', false, $context);

// fopen('arquivos_com_senha', 'modo', false, $context);