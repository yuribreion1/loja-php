## Treinamento em PHP

![php](https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png)

- Estudos feitos com base no curso em [PHP da Alura](https://cursos.alura.com.br/course/php-mysql-e-fundamentos-da-web)
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