<?php
    $nome = htmlspecialchars($_GET['Nome'])
    $nome = htmlspecialchars($_GET['Telefone'])
    $cpf  = htmlspecialchars($_GET['Cpf'])
    $nome = htmlspecialchars($_GET['Cep'])
    $nome = htmlspecialchars($_GET['Email'])
    $nome = htmlspecialchars($_GET['Senha'])
    $nome = htmlspecialchars($_GET['Profissao'])

$host = "localhost";
$user = "id20354497_riltter";
$pass = "(d*fsCfn0S]/zL-f";
$dbname = "id20354497_databasekenedy";
$connection = mysqli_connect($host,$user,$pass,$dbname) or die (mysql_errno().": ".mysql_error()."<BR>");
// mysqli_select_db($connection,$dbname);

$query = "INSERT INTO 'Pessoas'('Nome','Telefone','Cpf','Cep','Email','Senha','Profissao') 
Values('".Nome."','".$Cpf