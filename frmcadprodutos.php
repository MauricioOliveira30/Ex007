
<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produtos</title>

</head>

<body>

    <?php

    require ('./inc/Config.inc.php');

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);



    if(!empty($dados['SendCadProduto'])):

        unset($dados['SendCadProduto']);



        $cadProduto = new Produto();

        $cadProduto->exeCreate($dados);



        if(!$cadProduto->getResultado()):

            echo $cadProduto->getMsg();

        else:

            echo $cadProduto->getMsg();

        endif;

    endif;

    ?>









    <h1>Cadastro de Produtos</h1>

    <form name ="Cadproduto" action="" method="post" enctype="multipart/form-data">

        <label>Produto</label>

        <input type="text" name="produto" placeholder="Digite o nome do  produto" required>

        <br>



        <label>Preço</label>

        <input type="float" name="preco" placeholder="Preço do produto" required>

        <br>



        <label>Quantidade em Estoque</label>

        <input type="int" name="qtdEstoque" placeholder="quantidade" required>

        <br>

        <label>Fornecedor</label>

        <input type="text" name="fornecedor" placeholder="Nome do fornecedor" required>

        <br>



        <input type="submit" value="Cadastrar" name="SendCadProduto">

    </form>





</body>

</html>