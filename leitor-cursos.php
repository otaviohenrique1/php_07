<?php

// fopen => Abre o arquivo. r => leitura
// $arquivo = fopen('lista-cursos.txt', 'r');

// // feof => le ate o final da linha do arquivo
// while (!feof($arquivo)) {
//   // fgets => pega a linha do arquivo
//   $curso = fgets($arquivo);
//   echo $curso;
// }

// echo $cursos;

// // fecha o arquivo
// fclose($arquivo);



// fopen => Abre o arquivo
// $arquivo = fopen('lista-cursos.txt', 'r');

// filesize => le o tamanho do aruivo
// $tamanhoDoArquivo = filesize('lista-cursos.txt');
// // fread => le o arquivo
// $cursos = fread($arquivo, $tamanhoDoArquivo);

// echo $cursos;

// // fecha o arquivo
// fclose($arquivo);



// file_get_contents => le o arquivo inteiro, coloca em uma string e fecha o arquivo
// $cursos = file_get_contents('lista-cursos.txt');
// echo $cursos;


// file => le o arquivo inteiro, coloca em um array e fecha o arquivo
$cursos = file('lista-cursos.txt');
var_dump($cursos);
