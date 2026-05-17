<?php

/*Exercício 1: Aprovação Militar
#Variáveis:
#$idade;
#$altura;
#$peso;


#Regras:
#idade >= 18
#altura >= 1.70
#peso >= 60

#Resultados:
#"Aprovado para o treinamento"
#"Reprovado pela idade"
#"Reprovado pela altura"
"Reprovado pelo peso"*/


$idade = readline("qual a idade: ");
$altura = readline('qual a altura: ');
$peso = readline('qual o peso: ');


if($idade < 18){
    echo "Reprovado pela idade !";
}
else if($altura < 1.7){
    echo "reprovado pela altura !";
}
else if($peso < 60){
    echo "Reprovado pelo peso !";
}
else{
    echo "Aprovado para o treino ";
}