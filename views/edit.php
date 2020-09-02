<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Todo List</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/config.css">
    </head>

    <body>
        <div class="container">

            <h4 class="display-4 text-center">Editar Registro de caminhoneiro</h4>
            <div class="col col-xs-12">

                <form method="POST">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nome completo</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Digite seu nome completo" name="nome" aria-label="Username" aria-describedby="basic-addon1"  value="<?php echo $info['nome']; ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">E-mail</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Endereço de E-mail" name="email" aria-label="Username" aria-describedby="basic-addon1" value=" <?php echo $info['email']; ?>">
                    </div>
                    <div class="input-group mb-4">
                        <div class=" input-group-prepend form-control-control-lg">
                            <span class="input-group-text" id="basic-addon1">Nº DE CPF</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username"  name="cpf" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="form-group">
                        <label >Situação do caminhoneiro*</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="situacao" id="exampleRadios1" value="livre">
                            <label class="form-check-label" for="exampleRadios1">
                                Livre
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="situacao" id="exampleRadios2" value="Em_curso">
                            <label class="form-check-label" for="exampleRadios2">
                                EM CURSO
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="situacao" id="exampleRadios3" value="Retornando">
                            <label class="form-check-label" for="exampleRadios3">  
                                RETORNANDO
                            </label>
                        </div>
                    </div>
                    <select class="custom-select" value="status">
                        <option selected> Seleciona um Status para o caminhoneiro</option>
                        <option value="1">Ativo</option>
                        <option value="2"> Inativo</option>

                    </select>
                    <div class="col-xs-12">
                        <button id="botoesBaixo" class="btn btn-dark" id="botoes" value="Adicionar"> Cadastrar</button>
                    </div>
                </form>
                <br>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

</html>