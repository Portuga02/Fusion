<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Lista de Afazeres</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../assets/css/configTodo.css">
    </head>

    <body>
        <div class="hero">
            <div class="container">
                <h1 class="display-2 text-center">Todo simples</h1>
                <p class="lead text-center"></p>
                <div class="row">
                    <form id="form" class="col-lg-6 col-8 mx-auto" action="enviarNota.php">
                        <div class="input-group">
                            <input id="input" class="form-control" placeholder="Precione Enter para adicionar Novo item"> &nbsp;
                            <span>
                                <button id="btn" type="button" class="btn btn-primary">Adicionar Nova nota</button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <ul id="list" class="list col-lg-6 col-8 mx-auto"></ul>
                </div>
                <div class="row">
                    <button id="btnClr" type="button" class="btn btn-primary mx-auto btnHide" onclick=" return confirm('Tem certeza que deseja excluir estas atividades e tarefa da lista?')">Limpar Lista</button>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../assets/js/configTodo.js"></script>
    </body>

</html>