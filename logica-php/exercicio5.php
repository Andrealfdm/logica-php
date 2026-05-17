<?php

#Exercício 5: Banco
#Variáveis:
#$saldo;
#$saque;
#$limiteDiario;
#$contaBloqueada;


#Regras:
#não sacar mais que saldo
#não passar limite
#conta não pode estar bloqueada

#Resultados:
#"Saque realizado"
#"Saldo insuficiente"
#"Limite diário excedido"
#"Conta bloqueada"



#PEGA SALDO DA CONTA + LIMITE DIARIO
$saldo = readline('QUAL E O SALDO: ');
$limiteDiario = readline('QUAL LIMITE DIARIO: ');


#MOSTRA O SALDO E LIMITE DIARIO PARA USUARIO
echo "\n\n";
echo str_repeat("*"  , 27);
echo "\nSALDO DISPONIVEL R$: $saldo\n";
echo "LIMITE DIARIO DE R$: $limiteDiario\n";
echo str_repeat("*"  , 27);
echo "\n\n";


#PEGA O VALOR DO SAQUE , E PERGUNTA SE CONTA ESTA BLOQUEADA SIM OU NÃO
$saque = readline('VALOR DO SAQUE: ');
$bloqueada = readline('A CONTA ESTA BLOQUEADA SIM OU NÃO: ');


#VERIFICA SE A CONTA ESTA BLOAQUEADA ,SE SIM ENCERRA O CODIGO
if($bloqueada == 'sim'){
    echo "\nCONTA BLOQUEDA, VA A UMA AGENCIA MAIS PROXIMA DE VOCÊ\n";
    echo "OU LIQUE NO 0800.\n\n";
}


#VERIFICA SE O SAQUE E MENOR QUE O LIMITE DIARIO, SE SIM MOSTRA MENSAGEM DE SAQUE E LIMITE RESTANTE
else{
    if($saldo > 0 and $limiteDiario > 0){
        if($saque <= $limiteDiario and $saque <= $saldo and $saque > 0){
        echo "\nSAQUE REALIZADOCOM SUCESSO!";
        echo "\nVALOR DO SAQUE FOI DE R$: $saque\n";
        ECHO "SEU LIMITE DIARIO E DE " .$limiteDiario - $saque. "\n\n";
        $limite_exedido = $limiteDiario - $saque;

            #VERIFICA SE O LIMITE DIARIO CHEGOU A ZERO, SE SIM EXIBE MENSAGEM DE LIMITE DIARIO EXEDIDO
            if($limite_exedido == 0){
                echo "O LIMITE DIARIO FOI EXEDIDO!\n\n";
            }

        }
        #VERIFICA SE SAQUE FOR NEGATIVO, E AVISA QUE DEU ERRO 
        else if($saque < 0){
            echo "ERRO SAQUE!";
        }    
        
        #VERIFICA SE O SAQUE E MAIOR QUE LIMITE DIARIO
        else if($saque > $limiteDiario and $saque < $saldo){
            echo "\n\nOPERAÇÃO NÃO PERMITIDA, SAQUE MAIOR QUE LIMITE DIARIO R$: $limiteDiario\n\n";
        }

        # CASO SALDO SEJA MENOR QUE O SAQUE , RETORNA MENSAGEM , SALDO INSUFICIENTE !
        else if($saldo < $saque){
            echo "\n\nO SALDO E INSUFICIENTE, DISPONIVEL R$: $saldo";
        }

    }
    
    #EXIBE ERRO CASO SALDO E LIMITE SEJA NEGATIVO
    else{
        echo "\n\nSALDO  ---  ERRO";
    }
}