<?php   include("cabecalho.php");
        include("conexao.php");
        include("funcoes-banco.php") ?>
<?php 
    $id = $_GET['id'];

    $produto = listarProdutosPorId($conexao, $id);
    $nome = $produto['nome'];
    $preco = $produto['preco'];
?>
<div class="uk-container-expand uk-padding">
<legend class="uk-legend uk-margin">Atualizar produto</legend>
    <form action="atualizar-preco.php" method="post">
        <div class="uk-margin">
            <!-- <label class="uk-form-label" for="nome">ID:</label> -->
            <div class="uk-form-controls">
                <input class="uk-input" name="id" id="id" type="text" value="<?= $id ?>" hidden>
            </div>
            <label class="uk-form-label" for="nome">Nome</label>
            <div class="uk-form-controls">
                <input class="uk-input" name="nome" id="nome" type="text" value="<?= $produto['nome'] ?>" required>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="preco">Preço</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="preco" id="preco" type="number" value="<?= $produto['preco'] ?>"required>
                </div>
            </div>
            <button class="uk-button uk-button-default" type="submit">Atualizar</button>
            <br>
            <hr>
            <a href="index.php">Voltar</a>
    </form>
</div>
<?php include("rodape.php") ?>