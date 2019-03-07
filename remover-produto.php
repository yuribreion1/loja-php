<?php   include("cabecalho.php");
        include("conexao.php");
        include("funcoes-banco.php"); ?>

<?php
    $id = $_GET['id'];
    removerProdutos($conexao, $id);  
?>
        <script>
            UIkit.notification({
            message: 'Produto removido com sucesso',
            status: 'success',
            pos: 'bottom-right',
            timeout: 5000
        });
        </script>

<?php 
    //Redirecionar para listagem de produtos
    header("Location: listar-produto.php?removido=true"); 
    exit();
    ?>
<?php include("rodape.php") ?>