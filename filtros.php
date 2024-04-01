<?php

require 'MeuFiltro.php';

$arquivoCursos = fopen(filename: 'lista-cursos2.txt',  mode: 'r');

stream_filter_register('alura.partes', MeuFiltro::class);
// stream_filter_append => adiciona um filtro
// stream_filter_append($arquivoCursos, filter_name: 'string.toupper');
stream_filter_append($arquivoCursos, filter_name: 'alura.partes');

echo fread($arquivoCursos, filesize(filename: 'lista-cursos2.txt'));