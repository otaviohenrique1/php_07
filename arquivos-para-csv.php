<?php

$meusCursos = file('lista-cursos2.txt');
$outrosCursos = file('lista-cursos.txt');

$arquivoCsv = fopen('curso.csv', 'w');

foreach ($meusCursos as $curso) {
  $linha = [trim(mb_convert_encoding($curso, "Windows-1252","UTF-8")), 'Sim'];
  // $linha = [trim(utf8_decode($curso)), 'Sim'];
  fputcsv($arquivoCsv, $linha, ';');
  // fwrite($arquivoCsv, implode(',', $linha));
}

foreach ($outrosCursos as $curso) {
  $linha = [trim(mb_convert_encoding($curso, "Windows-1252","UTF-8")), 'Não'];
  // $linha = [trim(utf8_decode($curso)), 'Não'];
  fputcsv($arquivoCsv, $linha, ';');
  // fwrite($arquivoCsv, implode(',', $linha));
}

fclose($arquivoCsv);