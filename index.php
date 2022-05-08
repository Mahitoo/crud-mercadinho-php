<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="index.css" />
    <title>Crud em php</title>

    <style>
    body {
        background-color: #2a2a2a;
    }

    h1 {
        color: white;
        font-size: 50px;
        font-family: 'Source Code Pro', monospace;
        text-align: center;
        margin: 5px 0 140px;
    }

    input:focus {
        outline: none;
    }

    a {
        text-decoration: none;
        color: white;
        font-size: 50px;
    }

    p {
        margin: 0;
        padding: 0;
        font-size: 50px;
        font-family: 'Source Code Pro', monospace;
    }

    .botaoDosCruds {
        border: solid black 2px;
        border-radius: 10px;
        width: 330px;
        height: 165px;
    }

    .botaoDosCruds:hover {
        background-color: #535050;
        transition: 0.3s;
        box-shadow: 0 0 1em black;
        color: white;
    }
    </style>

</head>

<body>

    <h1>Crud em php Mercado</h1>

    <div class="container">
        <div class="row">
            <div class="col">
                <a href="Funcionario/FuncionarioPage.php">
                    <button type="button" class="botaoDosCruds">
                        <p>Fucionario</p>
                    </button>
                </a>
            </div>
            <div class="col">
                <a href="Vendas/VendasPage.php">
                    <button type="button" class="botaoDosCruds">
                        <p>Vendas</p>
                    </button>
                </a>
            </div>
            <div class="col">
                <a href="Estoque/EstoquePage.php">
                    <button type="button" class="botaoDosCruds">
                        <p>Estoque</p>
                    </button>
                </a>
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