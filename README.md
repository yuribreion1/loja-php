## Treinamento em PHP

![php](https://wiki.hosthp.com.br/wp-content/uploads/2017/03/phplogo-highres-300x150.png)

- O framework utilizado foi o [UIkit](https://getuikit.com/docs/introduction)

- Foi usado a funcionalidade de `include` para carregamento de partes de código para otimizar
    ``` php 
        <?php include("file.php") ?>
    ```
- Aplicando este conceito, criei dois arquivos para a parte de cima e baixo do código como `cabecalho.php` e `rodape.php`
- Também com base no `include` criei a conexão com o banco em um arquivo separado que ficou da seguinte forma: 
    ``` php
        <?php 
            $conexao = mysqli_connect('localhost','root','','loja');
    ```

- Um arquivo separado foi criado com as funções relacionadas a banco de dados como [`funcoes-banco.php`](https://github.com/yuribreion1/loja-php/blob/master/funcoes-banco.php)