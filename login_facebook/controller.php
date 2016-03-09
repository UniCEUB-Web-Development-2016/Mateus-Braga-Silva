<?php
    include "Usuario.php";

var_dump($_POST);

$primeiroNome = $_POST["primeironome"];

$segundoNome = $_POST["segundonome"];

$telefone = $_POST["telefone"];

$senha = $_POST["senha"];

$data = $_POST["data"];

$sexo = $_POST["sexo"];

$dados = new Usuario($primeiroNome, $segundoNome, $telefone, $senha, $data, $sexo);

$arquivo = fopen("/home/bragamateus/aulagit/Mateus-Braga-Silva/login_facebook/arquivo.txt", "a+");
if ($arquivo == false) die('Não foi possível criar o aequivo!');

$linha1 = fwrite($arquivo, $primeiroNome."\n");
$linha2 = fwrite($arquivo, $segundoNome."\n");
$linha3 = fwrite($arquivo, $telefone."\n");
$linha4 = fwrite($arquivo, $senha."\n");
$linha5 = fwrite($arquivo, $data."\n");
$linha6 = fwrite($arquivo, $sexo."\n");

fclose($arquivo);


?>