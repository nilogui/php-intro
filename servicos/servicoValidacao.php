<?php 
// declare('strict_types=1'); // Ativa a Tipagem Forte no PHP
function validaNome (string $nome) : bool
{
    if (empty($nome))
    {
        setarMensagemErro ( mensagem: 'O nome não pode ser vazio, por favor preencha-o novamente.' );
        // header(string: 'location: index.php'); // return;
        // header('location: index.php');
        return false;
    }
    else if (strlen($nome) < 3)
    {
        setarMensagemErro ( mensagem: 'O nome deve conter mais de 2 caracteres.' );
        // header('location: index.php');
        return false;
    }
    else if  (strlen($nome) > 40)
    {
        setarMensagemErro ( mensagem: 'O nome não pode conter mais de 40 caracteres.' );
        // header('location: index.php');
        return false;    
    }
    return true;
}
function validaIdade (string $idade) : bool
{
    if (!is_numeric($idade))
    {
        setarMensagemErro ( mensagem: 'Informe um número para idade!' );
        // header('location: index.php');
        return false; 
    }
    return true;     
}    