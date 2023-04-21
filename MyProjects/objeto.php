<?php
class ClienteEntidade{
public $nome;
public $telefone;
public $endereco;
public $cep;
public $email;
public function fnVerificaCampoPreenchido ($nome){
    if($nome=="") {
        echo "campo obrigatório";
        return false
    } else {
        return false
    }
}
}
$objClienteEntidade = new ClienteEntidade();

echo $objClienteEntidade->nome;
echo "antes";
        $objClienteEntidade->nome = $_GET['nome'];

        echo $objClienteEntidade->nome;