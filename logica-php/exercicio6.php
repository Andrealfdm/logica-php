<?php
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

