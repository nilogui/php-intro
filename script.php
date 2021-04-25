<?php 

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['fnome']; // $nome = $_GET['fnome']; 
$idade = $_POST['fidade']; // $idade = $_GET['fidade']; 
// Com $_GET mostra na barra de pesquisa do Browser 'http://localhost/script.php?fnome=Nilo&fidade=51'

if (empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente.';
    // header(string: 'location: index.php'); // return;
    header('location: index.php');
    return;
}
else if (strlen($nome) < 3)
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 2 caracteres.';
    header('location: index.php');
    return;
}
else if  (strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais de 40 caracteres.';
    header('location: index.php');
    return;    
}
else if (!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Informe um número para idade!';
    header('location: index.php');
    return; 
}

/*
var_dump($nome);
var_dump($idade);
*/

// return 0; // não interpreta as próximas linhas deste arquivo

if ($idade >= 6 && $idade <= 12)
{
    for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil')
        {
            // echo 'O nadador ', $nome, ' compete na categoria infantil cujo número é ', $i;
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria '.$categorias[$i].' cujo número é '.$i;
            header('location: index.php');
            return; 
        }    
    }
}
else if ($idade >= 13 && $idade <= 18)
{
    for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolescente')
        {
            // echo 'O nadador ', $nome, ' compete na categoria adolescente cujo número é ', $i, '<br/>';
            // echo 'O nadador '. $nome. ' compete na categoria adolescente cujo número é '. $i;
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria '.$categorias[$i].' cujo número é '.$i;
            header('location: index.php');
            return; 
        }    
    }
}
else
{
    for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto')
        {
            // echo 'O nadador ', $nome, ' compete na categoria adulto cujo número é ', $i;
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' compete na categoria '.$categorias[$i].' cujo número é '.$i;
            header('location: index.php');
            return; 
        }       
    }
}

// print_r($categorias); // print($categorias); //printf($categorias);