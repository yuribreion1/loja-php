<?php include("cabecalho.php") ?>
<div class="uk-container-expand uk-padding">
<legend class="uk-legend uk-margin">Inserir produto</legend>
    <form action="adicionar-produto.php" method="post">
        <div class="uk-margin">
            <label class="uk-form-label" for="nome">Nome</label>
            <div class="uk-form-controls">
                <input class="uk-input" name="nome" id="nome" type="text" placeholder="iPhone 8 Plus" required>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="preco">Preço</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="preco" id="preco" type="number" required>
                </div>
            </div>
            <button class="uk-button uk-button-default" type="submit">Submeter</button>
            <br>
            <hr>
            <a href="index.php">Voltar</a>
    </form>
</div>
<?php include("rodape.php") ?>