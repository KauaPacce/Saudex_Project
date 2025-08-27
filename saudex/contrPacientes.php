<?php

// identificando arq. onde esta a classe e instanciando a classe
include "clssaudex.php";
$usuarios = new clssaudex();

//-- Recebendo dados do formulario
$cod        = filter_input(INPUT_GET,"cod");
$Nome       = filter_input(INPUT_GET,"Nome");
$Senha      = filter_input(INPUT_GET,"Senha");
$Email      = filter_input(INPUT_GET,"Email");
$Telefone   = filter_input(INPUT_GET,"Telefone");
$cep        = filter_input(INPUT_GET,"cep");
$cpf        = filter_input(INPUT_GET,"cpf");
$nasc       = filter_input(INPUT_GET,"nasc");
$genero     = filter_input(INPUT_GET,"genero");
//$Mensalidade= filter_input(INPUT_GET,"Nome",FILTER_VALIDATE_FLOAT);

//-- Enviando para dentro da classe nos atributos
$usuarios->setcod($cod);
$usuarios->setNome($Nome);
$usuarios->setSenha($Senha);
$usuarios->setEmail($Email);
$usuarios->setTelefone($Telefone);
$usuarios->setcep($cep);
$usuarios->setcpf($cpf);
$usuarios->setnasc($nasc);
$usuarios->setgenero($genero);


//-- identificando qual ação executar 
$Acao = $_GET['acao'];

switch ($Acao) 
{
    case 'Cadastrar':
        echo $usuarios->Cadastrar();
        break;
    case 'Excluir':
        echo $usuarios->Excluir();
        break;
    case 'Editar':
        echo $usuarios->Editar();
        break;
    case 'Pesquisar':
        echo $usuarios->Pesquisar();
        break;  
    default:
        echo 'acao invalida';      
}