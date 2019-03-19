<?php   include("cabecalho.php");
        include("conexao.php");
        include("funcoes-banco.php"); ?>

<?php

    $id = $_GET['id'];

    //Redirecionar para atualizar de produtos
    header("Location: produto-formulario-update.php?id=$id"); 
    exit();
    ?>
<?php include("rodape.php") ?>