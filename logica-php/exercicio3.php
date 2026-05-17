<?php

#Exercício 3: Triagem Médica
#Analisar:
#temperatura
#oxigenação
#frequência cardíaca

#Regras:
#temperatura > 39
#oxigenação < 90
#frequência > 140

#Se alguma condição acontecer:
#echo "Estado grave";


#Senão:
#echo "Paciente estável";


$temperatura = readline('qual temperatrua: ');
$oxigenio = readline('qual nivel de oxigenio: ');
$frequencia = readline('qual a frequencia cardiaca: ');

if($temperatura > 39 or $oxigenio < 90 or $frequencia > 140){
    echo "Estado Grave !";
}
else{
    echo "paciente estável !";
}