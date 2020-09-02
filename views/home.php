<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/config.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/config.css" />
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/config.js"></script>
    <title>Fusion</title>
</head>

<body>
    <div class=" container">
        <button id="botoes" type="button" class="btn btn-dark"><a href="<?php echo BASE_URL; ?>users/add"> Adicionar
                Novo Usuário </a>
        </button> <button type="button" class="btn btn-primary" role="group"><a href="http://localhost:8080/">Lista de
                tarefas
            </a></button>

    </div>
    <br>
    <div class="container">
        <table class="table table-striped table-dark">
            <thead class="thead-dark ">
                <tr>
                    <th scope="col-sm-1"> Nome funcionário</th>
                    <th scope="col-sm-1"> CPF</th>
                    <th scope="col-sm-1"> E-mail Cadastrado </th>
                    <th scope="col-sm-1"> Situação</th>
                    <th scope="col-sm-1"> Status</th>
                    <th scope="col-sm-1" class="text-center" colspan="3"> Ações</th>
                </tr>
            </thead>
    </div>
    <?php foreach ($lista as $item) : ?>
    <tbody>
        <tr>
            <div class="text-center">
                <td><?php echo $item['nome']; ?></td>
                <td><?php echo $item['cpf']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo $item['situacao']; ?></td>
                <td><?php echo $item['status']; ?></td>
            </div>
            <td>
                <div class="btn-group" role="group" aria-label="Grupo de botões com dropdown aninhado">

                    <button type="button" class="btn btn-danger"><a
                            href=" <?php echo BASE_URL; ?>users/edit/<?php echo $item['id']; ?>"
                            onclick=" return confirm('Tem certeza que deseja editar este registro?')">Editar
                            Usuário</a></button>
                    <button type="button" class="btn btn-dark"> <a
                            href=" <?php echo BASE_URL; ?>users/del/<?php echo $item['id']; ?>"
                            onclick=" return confirm('Tem certeza que deseja excluir este registro?')">Deletar</a></button>
                </div>
            </td>

        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>