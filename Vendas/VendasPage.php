<?php 
include_once ("../testeconexao.php");
$sql= "SELECT * FROM vendas inner join funcionario on vendas.funcionario_venda=funcionario.codigo_funcionario
            inner join estoque on vendas.produto_venda = estoque.codigo_estoque";
$resultados_vendas = mysqli_query($conexaoTeste, $sql);

include_once ("../testeconexao.php");
$sql= "SELECT codigo_funcionario, nome FROM funcionario";
$resultados_funcionario = mysqli_query($conexaoTeste, $sql);

include_once ("../testeconexao.php");
$sql= "SELECT codigo_estoque, produto, valor_compra FROM estoque";
$resultados_estoque = mysqli_query($conexaoTeste, $sql);

?>




<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="estoque.css" />

    <title>Estoque</title>

    <style>
    body {
        background-color: #2a2a2a;
    }

    h1 {
        color: white;
        font-size: 50px;
        font-family: 'Source Code Pro', monospace;
        text-align: center;
        margin: 5px 0px 70px;
    }

    input:focus {
        outline: none;
    }

    .inputModalCadastro {
        border: 0 none;
        border-bottom: 1px solid;
    }

    .inputModalCadastro:focus {
        box-shadow: 0 0 1em black;
    }
    </style>

</head>

<body>
    <div>
        <h1>
            Vendas
        </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2">
                <div id="modalCadastro">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" style="font-size: 1.2em; width: 195px;" >Cadastrar <br> Venda
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalCentralizado" >Venda</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action='controleVendas.php' method='GET'>
                                        <p>
                                            <input class="inputModalCadastro" type="number" min="0" name="codigo_vendas"
                                                placeholder="Código Vendas" />
                                        </p>
                                        <p>
                                            <input class="inputModalCadastro" type="number" min="0"
                                                name="produto_vendas" placeholder="produto" />
                                        </p>
                                        <p>
                                            <input class="inputModalCadastro" type="number" min="1"
                                                name="quantidade_vendas" placeholder="quantidade" />
                                        </p>
                                        <p>
                                            <input class="inputModalCadastro" type="number" step="any" min="0"
                                                name="funcionario_vendas" placeholder="funcionario" />
                                        </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Fechar
                                    </button>
                                    <p><input type="submit" class="btn btn-secondary" name='botao_vendas'
                                            value='Cadastrar'></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div id="modalDeletar">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#exampleModalDeletarEstoque" style="font-size: 1.2em; width: 195px;">Deletar <br> Venda
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalDeletarEstoque" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelDeletarEstoque">Deletar Venda</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action='controleVendas.php' method='GET'>
                                        <p>
                                            <input class="inputModalCadastro" type="number" min="0" name="codigo_vendas"
                                                placeholder="Código" />
                                        </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fechar</button>
                                    <p><input type="submit" class="btn btn-secondary" name='botao_vendas'
                                            value='Deletar'>
                                    </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div id="modalAtualizar">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#exampleModalEstoque" style="font-size: 1.2em; width: 195px;">Atualizar <br> Venda
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalEstoque" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Atualizar Venda
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action='controleVendas.php' method='GET'>
                                        <p>
                                            <input class="inputModalCadastro" type="number" min="0" name="codigo_vendas"
                                                placeholder="Código" />
                                        </p>
                                        <p>
                                            <input class="inputModalCadastro" type="number" min="0" name="produto_vendas"
                                                placeholder="Codigo do Produto" />
                                        </p>
                                        <p>
                                            <input class="inputModalCadastro" type="number" min="1"
                                                name="quantidade_vendas" placeholder="Quantidade" />
                                        </p>
                                        <p>
                                            <input class="inputModalCadastro" type="number" min="0" step="any"
                                                name="funcionario_vendas" placeholder="Codigo do funcionario" />
                                        </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Fechar
                                    </button>
                                    <p><input type="submit" class="btn btn-secondary" id="btnAtt" name='botao_vendas'
                                            value='Atualizar'></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="m-5 ">
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Funcionario</th>
                                <th scope="col">...</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                    
                    while($userdata = mysqli_fetch_assoc($resultados_vendas)){
                        echo "<tr>";
                        echo "<td>".$userdata['codigo_venda']."</td>";
                        echo "<td>".$userdata['produto']."</td>";
                        echo "<td>".$userdata['quantidade_venda']."</td>";
                        echo "<td>".$userdata['nome']."</td>";
                        echo "<td>Ações</td>";
                        echo "</tr>";
                    }
                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="m-5 ">
                        <table class="table text-white">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                    
                    while($userdata = mysqli_fetch_assoc($resultados_funcionario)){
                        echo "<tr>";
                        echo "<td>".$userdata['codigo_funcionario']."</td>";
                        echo "<td>".$userdata['nome']."</td>";
                        echo "</tr>";
                    }
                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="m-5 ">
                        <table class="table text-white">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Produto</th>
                                    <th scope="col">Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                    
                    while($userdata = mysqli_fetch_assoc($resultados_estoque)){
                        echo "<tr>";
                        echo "<td>".$userdata['codigo_estoque']."</td>";
                        echo "<td>".$userdata['produto']."</td>";
                        echo "<td>".$userdata['valor_compra']."</td>";
                        echo "</tr>";
                    }
                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>