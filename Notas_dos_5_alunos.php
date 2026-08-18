<?php

$notas = [7.5, 8.0, 6.5, 9.0, 5.5];

$soma = 0;
$maiorNota = $notas[0];
$menorNota = $notas[0];

foreach ($notas as $nota) {
    $soma += $nota;

    if ($nota > $maiorNota) {
        $maiorNota = $nota;
    }

    if ($nota < $menorNota) {
        $menorNota = $nota;
    }
}

$media = $soma / count($notas);

echo "Média da turma: " . number_format($media, 2, ',', '.') . "<br>";
echo "Maior nota: " . number_format($maiorNota, 2, ',', '.') . "<br>";
echo "Menor nota: " . number_format($menorNota, 2, ',', '.');

?>