<?php

// // fopen => Abre o arquivo.
// // w => escrita, sobrescreve o arquivo se ele existir, cria o arquivo se ele nao existir
// // a => escreve no final do arquivo
// $arquivo = fopen('lista-cursos.txt', 'a');

// // $curso = 'Design Patterns PHP I: Boas práticas de programação';
// $curso = "\nDesign Patterns PHP II: Boas práticas de programação";

// // fwrite => escreve no arquivo
// // fwrite($arquivo, $curso, length: 21);
// fwrite($arquivo, $curso);

// fclose($arquivo); // fecha o arquivo



// $curso = 'Design Patterns PHP I: Boas práticas de programação';
$curso = "\nDesign Patterns PHP II: Boas práticas de programação";

file_put_contents('lista-cursos.txt', $curso, FILE_APPEND);