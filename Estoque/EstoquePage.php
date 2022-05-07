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
        margin-top: 5px;
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

    #modalCadastro {
        margin-left: 20%;
    }

    #modalAtualizar {
        margin-left: 70%;
    }
    </style>

</head>

<body>
    <div>
        <h1>
            Estoque
        </h1>
    </div>

    <br /><br /><br />
    <div id="modalCadastro">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Cadastrar Estoque
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">Estoque</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action='controleEstoque.php' method='GET'>
                            <p>
                                <input class="inputModalCadastro" type="number" min="0" name="codigo_estoque"
                                    placeholder="Código" />
                            </p>
                            <p>
                                <input class="inputModalCadastro" type="text" name="produto"
                                    placeholder="Nome do Produto" />
                            </p>
                            <p>
                                <input class="inputModalCadastro" type="number" min="1" name="quantidade"
                                    placeholder="Quantidade" />
                            </p>
                            <p>
                                <input class="inputModalCadastro" type="number" step="any" min="1" name="valor"
                                    placeholder="Valor do Produto" />
                            </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Fechar
                        </button>
                        <p><input type="submit" class="btn btn-secondary" name='botao_estoque'
                                value='cadastrar_estoque'></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modalAtualizar">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalEstoque">
            Atualizar Estoque
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalEstoque" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Atualizar Estoque
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <input class="inputModalCadastro" type="number" min="0" name="codigo_estoque"
                                placeholder="Código" />
                        </p>
                        <p>
                            <input class="inputModalCadastro" type="text" name="produto"
                                placeholder="Nome do Produto" />
                        </p>
                        <p>
                            <input class="inputModalCadastro" type="number" min="1" name="quantidade"
                                placeholder="Quantidade" />
                        </p>
                        <p>
                            <input class="inputModalCadastro" type="number" min="1" step="any" name="valor"
                                placeholder="Valor do Produto" />
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Fechar
                        </button>
                        <p><input type="submit" class="btn btn-secondary" name='botao_estoque'
                                value='atualizar_estoque'></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- apagar -->
    <form action='controleEstoque.php' method='GET'>
        <p>
            <input class="inputModalCadastro" type="number" min="0" name="codigo_estoque" placeholder="Código" />
        </p>
        <p>
            <input class="inputModalCadastro" type="text" name="produto" placeholder="Nome do Produto" />
        </p>
        <p>
            <input class="inputModalCadastro" type="number" min="1" name="quantidade" placeholder="Quantidade" />
        </p>
        <p>
            <input class="inputModalCadastro" type="number" step="any" min="1" name="valor"
                placeholder="Valor do Produto" />
        </p>
        </div>
        <p><input type="submit" class="btn btn-secondary" name='botao_estoque' value='atualizar_estoque'></p>
    </form>
    <!-- apagar -->


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