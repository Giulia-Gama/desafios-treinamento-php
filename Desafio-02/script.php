<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];


if (!empty($nome) && !empty($email) && !empty($idade)) {
 
    function testeEmail($email)
    {
        $validadorEmail = false;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $validadorEmail = true;
        }
        return $validadorEmail;
    }

    function testeIdade($idade)
    {
        $validadoridade = 0; {
            if ($idade >= 18) {
                $validadoridade = true;
            } else {
                $validadoridade = false;
            }
        }
        return $validadoridade;
    }

    $resultadoEmail = testeEmail($email);
    $resultadoIdade = testeIdade($idade);


    function resultadoMensagem($resultadoEmail, $resultadoIdade)
    {
        if ($resultadoEmail == true && $resultadoIdade == false) {
            $mensagem = 1;
        }
        if ($resultadoEmail == false && $resultadoIdade == true) {
            $mensagem = 2;
        }
        if ($resultadoEmail == false && $resultadoIdade == false) {
            $mensagem = 3;
        }
        if ($resultadoEmail == true && $resultadoIdade == true) {
            $mensagem = 4;
        }
        return $mensagem;
    }

    $resposta = resultadoMensagem($resultadoEmail, $resultadoIdade);

    switch ($resposta) {

        case 1:
            echo "Idade abaixo dos 18 anos !";
            break;
        case 2:
            echo "Email inválido!";
            break;
        case 3:
            echo "Email incorreto e idade abaixo da permitida";
            break;
        case 4:
            echo "Formulário enviado com Sucesso! ";

            break;
    }
}
else {
    echo ("Formulário incompleto, preencha novamente!");
}
