<?php

#Exercício 6: Login
#Variáveis:
#$login;
#$senha;
#$token;
#$tentativas;


#Regras:
#login correto
#senha correta
#token true
#tentativas < 3

#Resultados:
#"Login realizado"
#"Login inválido"
#"Senha inválida"
#"Token inválido"
#"Usuário bloqueado"


# NÃO FOI EXATAMENTE COMO ME PEDIU MAS FIZ DESSA FORMA 
# ACHEI MAIS FUNCIONAL :)
# ESPERO QUE CONSIDERE QUERIDO PROFESSOR
#FOI FEITO COM MUITO AMOR E CARINHO KKKK LA ELE !


// ENTRADA, LOGIN E SENHA 
$login = readline('LOGIN: ');
$senha = readline('SENHA: ');
$token = true;
$tentativas = 3;

// LOGIN E SENHA CORRETOS
$loginCorreto = "admin";
$senhaCorreta = "1234";

# 1. VERIFICA SE O LOGIN OU A SENHA ESTÃO INCORRETOS 1 vez
if ($login != $loginCorreto or $senha != $senhaCorreta) {
    $tentativas  -= 1;
    echo "\n\n";
    echo "LOGIN OU SENHA ESTA INCORRETO\nTENTE NOVAMENTE!\nVOCÊ TEM $tentativas TENTATIVAS!\n\n";

    #PEDE PARA O USUARIO DIGITAR LOGIN E SENHA NOVAMENTE
    $login = readline('LOGIN: ');
    $senha = readline('SENHA: ');

    # 2. VERIFICA SE O LOGIN OU A SENHA ESTÃO INCORRETOS 2 vez
    if($login != $loginCorreto or $senha != $senhaCorreta){
    $tentativas  -= 1;
    echo "\n\n";
    echo "LOGIN OU SENHA ESTA INCORRETO\nTENTE NOVAMENTE!\nVOCÊ TEM $tentativas TENTATIVAS!\n\n";

    #PEDE PARA O USUARIO DIGITAR LOGIN E SENHA NOVAMENTE
    $login = readline('LOGIN: ');
    $senha = readline('SENHA: ');

        # 3. VERIFICA SE O LOGIN OU A SENHA ESTÃO INCORRETOS 3 vez
        if($login != $loginCorreto or $senha != $senhaCorreta){
            $tentativas  -= 1;
            echo "\n\n";
            echo "LOGIN OU SENHA ESTA INCORRETO\nTENTE NOVAMENTE!\nVOCÊ TEM $tentativas TENTATIVA!\n\n";
            if($login != $loginCorreto or $senha != $senhaCorreta){
                echo "SEU USUARIO ESTA BLOQUEADO!";
            }   
        }
        else{
            echo "\n\nOLÁ ANDRÉ, SEJA BEM VINDO!\nLOGIN EFETUADO COM SUCESSO!";
        }
    }
    else{
        echo "\n\nOLÁ ANDRÉ, SEJA BEM VINDO!\nLOGIN EFETUADO COM SUCESSO!";
    }          
}
else{
    echo "\n\nOLÁ ANDRÉ, SEJA BEM VINDO!\nLOGIN EFETUADO COM SUCESSO!";
}
?>

