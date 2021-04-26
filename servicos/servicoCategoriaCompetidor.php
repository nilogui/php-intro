<?php

function defineCategoriaCompetidor (string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';

    if (validaNome($nome) && validaIdade($idade))
    {
        if ($idade >= 6 && $idade <= 12)
        {
            for ($i = 0; $i < count($categorias); $i++)
            {
                if ($categorias[$i] == 'infantil')
                {
                    // echo 'O nadador ', $nome, ' compete na categoria infantil cujo número é ', $i;
                    setarMensagemSucesso ( mensagem: 'O nadador '.$nome.' compete na categoria '.$categorias[$i].' cujo número é '.$i );
                    // header('location: index.php');
                    return null; 
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
                    setarMensagemSucesso ( mensagem: 'O nadador '.$nome.' compete na categoria '.$categorias[$i].' cujo número é '.$i );
                    // header('location: index.php');
                    return null; 
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
                    setarMensagemSucesso ( mensagem: 'O nadador '.$nome.' compete na categoria '.$categorias[$i].' cujo número é '.$i );
                    // header('location: index.php');
                    return null; 
                }       
            }
        }
    }
    else 
    {
        return obterMensagemErro ();
    }   

// print_r($categorias); // print($categorias); //printf($categorias);

}
