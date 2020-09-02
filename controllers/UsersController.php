<?php

class UsersController extends controller
{
    public function index()
    {
    }

    public function add()
    {
        $dados = array(
            'error' => ''
        );

        if (!empty($_GET['error'])) {
            $dados['error'] = $_GET['error'];
        }

        $this->loadTemplate('add', $dados);
    }

    public function add_save()
    {
        if (!empty(addslashes($_POST['email']))) {
            $nome = addslashes($_POST['nome']);
            $cpf = addslashes($_POST['cpf']);
            $email = addslashes($_POST['email']);
            $situacao = addslashes($_POST['situacao']);
            $status = addslashes($_POST['status']);

            $users = new UsersModels();
            if ($users->add($nome, $cpf, $email, $situacao, $status)) {
                header("Location: " . BASE_URL);
            } else {
                header("Location: " . BASE_URL . 'users/add?error=exist');
            }
        } else {
            header("Location: " . BASE_URL . 'users/add');
        }
    }

    public function edit($id)
    {
        // 1º passo: pegar as informações do contato pelo ID
        // 2º passo: carregar o formulário, preenchido.
        // 3º passo: receber os dados do form e editar.
        $dados = array();

        if (!empty($id)) {
            $users = new UsersModels();

            if (!empty($_POST['nome'])) {
                $nome = addslashes($_POST['nome']);
                $cpf = addslashes($_POST['cpf']);
                $email = addslashes($_POST['email']);
                $situacao = addslashes($_POST['situacao']);
                $status = addslashes($_POST['status']);

                $users->edit($nome, $cpf, $email, $situacao, $status, $id);
            } else {
                $dados['info'] = $users->get($id);

                if (isset($dados['info']['id'])) {
                    $this->loadTemplate('edit', $dados);
                    exit;
                }
            }
        }

        header("Location: " . BASE_URL);
    }

    public function del($id)
    {
        if (!empty($id)) {
            $users = new UsersModels();
            $users->delete($id);
        }

        header("Location: " . BASE_URL);
    }
}
