<?php

$preco = 50;
$quantidade = 5;

$valortotal = $preco * $quantidade;

    if ($valortotal >= 200) {
        $desconto = $valortotal *0.10;
        $valorfinal = $valortotal - $desconto;
    } else {
        $valorfinal = $valortotal;
    }
    echo "Valor total: R$ " . number_format($valortotal, 2, ',', '.') . "<br>"; 
    echo "Valor final: R$ " . number_format($valorfinal, 2, ',', '.');   

    ?>