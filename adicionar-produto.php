<?php   include("cabecalho.php");
        include("conexao.php");
        include("funcoes-banco.php") ?>
<div class="uk-container-expand uk-padding" >
    <h1 class="display-4">Adicionar um produto</h1>
    <?php 
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        
        $mensagem = mysqli_error($conexao);

    if (insereProduto($conexao, $nome, $preco)) {
        ?>
        <script>
            UIkit.notification({
            message: 'Produto inserido com sucesso',
            status: 'success',
            pos: 'bottom-right',
            timeout: 5000
        });
        </script>
        <?php
    } else {
        ?>
        <script>
            UIkit.notification({
            message: 'Produto não foi inserido',
            status: 'danger',
            pos: 'bottom-right',
            timeout: 5000
        });
        </script>
        <p>Mensagem de erro: <?= $mensagem ?></p>
        <?php
    }

    ?>
    <p>Produto <?= $nome?> com preço <?= $preco?> adicionado com sucesso!</p>
    <a href="index.php">Voltar</a>
</div>

<?php include("rodape.php") ?>