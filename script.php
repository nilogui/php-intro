<?php 

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
    echo 'O nome não pode ser vazio!';
    return;
}

if (strlen($nome) < 3)
{
    echo 'O nome deve conter mais de 2 caracteres';
    return;
}

if  (strlen($nome) > 40)
{
    echo 'O nome é muito extenso!';
    return;
}

if (!is_numeric($idade))
{
    echo 'Informe um número para idade!';
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
            echo 'O nadador ', $nome, ' compete na categoria infantil cujo número é ', $i;
    }
}
else if ($idade >= 13 && $idade <= 18)
{
    for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolescente')
        {
            echo 'O nadador ', $nome, ' compete na categoria adolescente cujo número é ', $i, '<br/>';
            echo 'O nadador '. $nome. ' compete na categoria adolescente cujo número é '. $i;
        }    
    }
}
else
{
    for ($i = 0; $i < count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto')
            echo 'O nadador ', $nome, ' compete na categoria adulto cujo número é ', $i;
    }
}

// print_r($categorias); // print($categorias); //printf($categorias);