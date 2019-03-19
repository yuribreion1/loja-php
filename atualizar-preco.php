<?php   include("cabecalho.php");
        include("conexao.php");
        include("funcoes-banco.php") ?>
<div class="uk-container-expand uk-padding" >
    <h1 class="display-4">Alterar preço</h1>
    <?php 
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];

        if (atualizarProduto($conexao, $id, $nome, $preco)) {
            ?>
            <script>
                UIkit.notification({
                message: 'Produto alterado com sucesso',
                status: 'success',
                pos: 'bottom-right',
                timeout: 5000
            });
            </script>
            <div class="uk-alert-success" uk-alert>
                <a class="uk-alert-close" uk-close></a>
                <p>Produto alterado com nome <?= $nome ?> e preço <?= $preco ?></p>
            </div>
            <?php
        } else {
            ?>
            <script>
                UIkit.notification({
                message: 'Produto não foi alterado',
                status: 'danger',
                pos: 'bottom-right',
                timeout: 5000
            });
            </script>
            <?php
        }
    ?>
    
    <a href="index.php">Voltar</a>
</div>

<?php include("rodape.php") ?>