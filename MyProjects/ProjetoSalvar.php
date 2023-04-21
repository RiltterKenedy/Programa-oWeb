<?php
    $Nome = htmlspecialchars($_GET['nome']);
    $Telefone = htmlspecialchars($_GET['telefone']);
    $Cpf  = htmlspecialchars($_GET['cpf']);
    $Cep = htmlspecialchars($_GET['cep']);
    $Email = htmlspecialchars($_GET['email']);
    $Senha = htmlspecialchars($_GET['senha']);
    $Profissao = htmlspecialchars($_GET['profissao']);
    

$host = "localhost";
$user = "id20354497_riltter";
$pass = "=4n>HUXciSI}*b+m";
$dbname = "id20354497_databasekenedy";
$connection = mysqli_connect($host,$user,$pass,$dbname) or die (mysql_errno().": ".mysql_error()."<BR>");
// mysqli_select_db($connection,$dbname);

$query = "INSERT INTO `Pessoas` (`nome`, `cpf`, `telefone`, `email`, `cep`, `senha`, `profissao`) VALUES('" . $Nome . "', '" . $Cpf . "', '" . $Telefone . "', '" . $Email . "', '" . $Cep . "', '" . $Senha . "', '" . $Profissao . "')";


echo $query;
mysqli_query ($connection, $query) or die ('Erro ao salvar');

echo "<br/>";
echo "<br/>";
echo " SALVO - Nome: ".$nome." | CPF; ".$cpf." | ";