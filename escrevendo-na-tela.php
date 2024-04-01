<?php

// $tela = fopen('php://stdout', 'w');
// $tela = fopen('php://stderr', 'w');

// fwrite($tela, 'Olá mundo');
// fwrite(STDOUT, 'Olá mundo');
// fwrite(STDERR, 'Olá mundo');

$cursos = fopen('zip://arquivos.zip#lista-cursos2.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);