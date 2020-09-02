<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Fusion</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/config.css">
    </head>

    <body>
        <div class="container">

            <h4 class="display-4 text-center">Adicionar novo caminhoneiro</h4>
                <div class="col col-xs-12">

                <form method="POST" >
                    <div class="form-group ">
                        <h5> <label> Nome  do caminhoneiro</label></h5>
                        <input class="form-control form-control-lg" type="text" name="nome" placeholder="Digite seu nome completo">
                    </div>
                    <div class="form-group ">
                        <h5>  <label> CPF caminhoneiro</label> </h5>

                        <input class="form-control form-control-lg" type="text" name="cpf" placeholder="Digite o CPF  (apenas numeros)">
                    </div>

                    <div class="form-group ">
                        <h5><label> E-mail do caminhoneiro</label></h5>
                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Digite seu melhor email para cadastro">
                    </div>

                    <div class="form-group">
                        <h5><label >Situação*</label> </h5>
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
                    <h5> <label>Selecionar um Status para o caminhoneiro</label> </h5>
                    <select class="custom-select" value="status" name="status"> 

                        <option value="ativo">Ativo</option>
                        <option value="Inativo"> Inativo</option>

                    </select>
                    <div class="col-xs-12">
                    <input class="btn btn-dark"  class="form-check-input" type="submit" value="Salvar" />
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