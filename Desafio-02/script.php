<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$aviso = ""; 
$avisoemail;    


function validaNome($nome)
{
    $testenome = False;

    if (isset($_POST["nome"])) {
        $testenome = true;
    }
    return $testenome;
}

function validaEmail($email, $avisoemail)
{
    $testeemail = false;
    $avisoemail = " ";

    if (var_dump(isset($_POST["email"]))) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $testeemail = true;
        } 
    }
    else {
        $avisoemail = "O Email informado não é válido! <br> ";
    }
    return array($testeemail, $avisoemail);
}
function validaIdade($idade, $avisoidade)
{
    $testeidade = False;
    $avisoidade = " ";

    if (isset($_POST["idade"])) {
        if ($idade >= 18) {
            $testeidade = true;
        } else {
            $avisoidade = 'O Usuário é Menor de 18 anos! ou campo não preenchido <br>';
        }
    }
    return array($testeidade, $avisoidade);
}

$resultadonome = ValidaNome ($nome); 
$listemail  = Validaemail($email, $aviso);
$listidade  = ValidaIdade($idade, $aviso); 
$resultadotesteemail = $listemail[0]; 
$resultadoavisoemail = $listemail[1];
$resultadotesteidade = $listidade[0];
$resultadoavisoidade = $listidade[1]; 

if ($resultadonome == true && $resultadotesteemail == true && $resultadotesteidade == true){
    echo "Formulário enviado com sucesso !";

}
else {
   echo "Formulário incompleto ou incorreto <br>";
   if ($resultadotesteemail == false){
       echo ($listemail[1]);
   }
   if ($resultadotesteidade == false){
    echo ($listidade[1]);
}

}

