<?php

#Exercício 4: Loja
#Variáveis:
#$valorCompra;
#$clienteVip;


#Regras:
#acima de 300 = 15%
#acima de 200 = 10%
#Se o cliente for VIP ganhará um bônus de +5%

#Mostrar:
#valor original
#desconto
#valor final


$valorCompra = readline('Valor da compra: ');
$vip = readline('E Vips SIM ou Não:');

if($vip == "sim"){
    if($valorCompra >= 300){
        $desconto = ($valorCompra / 100) * 20;
        echo"\n\n";
        echo "valor toal da compra R$: $valorCompra\n";
        echo "valor do desconto R$: $desconto\n";
        echo "valor total da compra com desconto R$: " .$valorCompra - $desconto;
    }

    else{
        $desconto = ($valorCompra / 100) * 15;
        echo"\n\n";
        echo "valor toal da compra R$: $valorCompra\n";
        echo "valor do desconto R$: $desconto\n";
        echo "valor total da compra com desconto R$: " .$valorCompra - $desconto;

    }
}

else {
    if($valorCompra > 300){
        $desconto = ($valorCompra / 100) * 15;
        echo"\n\n";
        echo "valor toal da compra R$: $valorCompra\n";
        echo "valor do desconto R$: $desconto\n";
        echo "valor total da compra com desconto R$: " .$valorCompra - $desconto;
    }

    else{
        $desconto = ($valorCompra / 100) * 10;
        echo"\n\n";
        echo "valor toal da compra R$: $valorCompra\n";
        echo "valor do desconto R$: $desconto\n";
        echo "valor total da compra com desconto R$: " .$valorCompra - $desconto;
    }
}   








