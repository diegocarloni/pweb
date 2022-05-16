/* Usando a tabela abaixo
produto{codigo, titulo, descritivo, valor, quantidade, categoria}
Faça o CRUD em PHP e o arquivo de listagem
produto.php
listaProduto.php */

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PÁGINA BUSCA PRODUTO</title>
</head>

<body>
    
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">

                <h1>Lista de Produtos</h1>

                <div class="col-lg-10">

                    <form method="post" action="pweb_10_listaProduto.php">
                        <div class="form-floating mt-3 mb-3">
                            <div class="col-lg-4 text-end">
                                <input type="text" class="form-control" id="busca" name="busca" placeholder="busca">
                                <button type="submit" class="btn btn-primary mt-2" name="btnBusca">Pesquisar</button>
                            </div>
                        </div>
                    </form>

                    <a href="pweb_10_produto.php">Ir para Página Produto</a>

                    <table class="text-center table table-hover mt-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Descritivo</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Categoria</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <?php listar(); ?>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>

<?php 
    function listar(){
        $conexao = new mysqli("localhost", "root", "1234", "PW10"); //conecta com o banco de dados

        if(isset ($_POST["btnBusca"])){ 
            $busca = $_POST["busca"];
            $sql = "select * from produto where titulo like '%$busca%' or descritivo like '%$busca%' or categoria like '%$busca%'";
        } else{ 
            $sql = "select * from produto order by codigo";
        }

        $resultado = mysqli_query($conexao, $sql);

        while($reg = mysqli_fetch_array($resultado)){
            $codigo = $reg["codigo"];
            $titulo = $reg["titulo"];
            $descritivo = $reg["descritivo"];
            $valor = $reg["valor"];
            $quantidade = $reg["quantidade"];
            $categoria = $reg["categoria"];

            echo "<tr>
                    <th>$codigo</th>
                    <th>$titulo</th>
                    <th>$descritivo</th>
                    <th>$valor</th>
                    <th>$quantidade</th>
                    <th>$categoria</th>
                    <th><a href='pweb_10_produto.php?codigo=$codigo'>editar</a></th>";
        }
        mysqli_close($conexao);
    }
?>