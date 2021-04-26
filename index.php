<?php
    // session_start();
    include 'servicos/servicoMensagemSessao.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device.width, initial.scale=1">
</head>

<body>

<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post"> <!--  method="get">-->
    <?php
        // $mensagemDeSucesso = isset ($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
        $mensagemDeSucesso = obterMensagemSucesso();
        if (!empty($mensagemDeSucesso))
        {
            echo $mensagemDeSucesso;
        }

        // $mensagemDeErro = isset ($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
        $mensagemDeErro = obterMensagemErro();
        if (!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
    ?>
    <p>Seu nome: <input type="text" name="fnome" /></p>
    <p>Sua idade: <input type="text" name="fidade" /></p>
    <p><input type="submit" value="Enviar dados do competidor"/></p>
</form>           >

</body>

</html>