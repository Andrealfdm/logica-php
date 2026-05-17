<?php


/*$peso = readline('digite o peso: ');
$altura =  readline('digite a altura: ');


$imc = $peso / ($altura * 2);

echo "O IMC e ==> $imc";*/

/*$mensagem = "Não rodou o IF";
$condicao = false;

if($condicao){
    $mensagem = "Rodou o codigo !";
}

echo $mensagem;*/

$nota = readline("digite a nota do aluno: ");

if($nota >= 7 && $nota <= 10){
    echo "sua nota foi $nota você foi aprovado !";
}else if($nota < 7 && $nota >= 5){
    echo "sua nota foi $nota você esta de recuperação !";
}else if ($nota < 5 && $nota >= 0){
    echo "você esta REPROVADO !";
}else if ($nota < 0 || $nota > 10){
    echo"esta nota não existe !";
}
