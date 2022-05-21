<?php 
include_once ("../testeconexao.php");
$sql= "SELECT * FROM funcionario";
$resultados_funcionario = mysqli_query($conexaoTeste, $sql);

?>




<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="funcionario.css" />
    <title>Funcionario</title>

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
            Funcionarios
        </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2">
                <div id="modalCadastro">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" style="font-size: 1.2em;">Cadastrar Funcionario</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalCentralizado">Funcionario</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action='controleFuncionario.php' method='GET'>
                                        <p>
                                            <input class="inputModalCadastro" type="number" min="0" name="codigo"
                                                placeholder="Código" />
                                        </p>
                                        <p>
                                            <input class="inputModalCadastro" type="text" name="nome"
                                                placeholder="Nome" />
                                        </p>
                                        <p>
                                            <input class="inputModalCadastro" type="text" name="cargo"
                                                placeholder="Cargo" />
                                        </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Fechar
                                    </button>
                                    <p><input type="submit" class="btn btn-secondary" name='botao' value='Cadastrar'>
                                    </p>
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
                        data-bs-target="#exampleModalDeletar" style="font-size: 1.2em;">Deletar Funcionario</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalDeletar" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelDeletar">Deletar Funcionario</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action='controleFuncionario.php' method='GET'>
                                        <p>
                                            <input class="inputModalCadastro" type="number" min="0" name="codigo"
                                                placeholder="Código" />
                                        </p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fechar</button>
                                    <p><input type="submit" class="btn btn-secondary" name='botao' value='Deletar'></p>
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
                        data-bs-target="#exampleModalAttFuncionario" style="font-size: 1.2em;">Atualizar
                        Funcionario</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalAttFuncionario" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelAttFuncionario">
                                        Atualizar Funcionario
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action='controleFuncionario.php' method='GET'>
                                        <p>
                                            <input class="inputModalCadastro" type="number" min="0" name="codigo"
                                                placeholder="Código" />
                                        </p>
                                        <p>
                                            <input class="inputModalCadastro" type="text" name="nome"
                                                placeholder="Nome" />
                                        </p>
                                        <p>
                                            <input class="inputModalCadastro" type="text" name="cargo"
                                                placeholder="Cargo" />
                                        </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Fechar
                                    </button>
                                    <p><input type="submit" class="btn btn-secondary" name='botao' value='Atualizar'>
                                    </p>
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
                                <th scope="col">Nome</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">...</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                    
                    while($userdata = mysqli_fetch_assoc($resultados_funcionario)){
                        echo "<tr>";
                        echo "<td>".$userdata['codigo_funcionario']."</td>";
                        echo "<td>".$userdata['nome']."</td>";
                        echo "<td>".$userdata['cargo']."</td>";
                         echo "<td>Ações</td>";
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