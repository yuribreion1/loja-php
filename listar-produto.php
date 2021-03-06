<?php   include("cabecalho.php");
        include("conexao.php");
        include("funcoes-banco.php") ?>

    <table class="uk-table uk-table-striped uk-padding">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Atualizar</th>
                <th>Remover?</th>
            </tr>
        </thead>
        <tbody>

    <?php

    if (array_key_exists("removido", $_GET) && $_GET['removido'] == "true") {
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
    }

    $produtos = listarProdutos($conexao); 
    foreach ($produtos as $produto) {
        ?>
            <tr>
                <td>
                    <?= $produto['id'] ?>
                </td>
                <td>
                    <?= $produto['nome'] ?>
                </td>
                <td>
                    <?= $produto['preco'] ?>
                </td>
                <td>
                    <a href="atualizar-produto.php?id=<?= $produto['id'] ?>" class="uk-icon-link" uk-icon="file-edit"></a>
                </td>
                <td>
                    <a href="remover-produto.php?id=<?= $produto['id'] ?>" class="uk-icon-link" uk-icon="trash"></a>
                </td>
            </tr>
        <?php
    }
?>
        </tbody>
        </table>
        <hr>
        <a href="index.php">Voltar</a>
<?php include("rodape.php") ?>