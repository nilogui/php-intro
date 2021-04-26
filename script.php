<?php 

// session_start();
include 'servicos/servicoMensagemSessao.php';
include 'servicos/servicoValidacao.php';
include 'servicos/servicoCategoriaCompetidor.php';

$nome = $_POST['fnome']; // $nome = $_GET['fnome']; 
$idade = $_POST['fidade']; // $idade = $_GET['fidade']; 
// Com $_GET mostra na barra de pesquisa do Browser 'http://localhost/script.php?fnome=Nilo&fidade=51'

/*
var_dump($nome);
var_dump($idade);
*/

// return 0; // não interpreta as próximas linhas deste arquivo

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');