<?php

class UsersModels extends model
{
    public function getAll()
    {
        $array = array();

        $sql = "SELECT  * FROM users ";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function get($id)
    {
        $array = array();

        $sql = 'SELECT * FROM users WHERE id = :id';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function add($nome, $cpf, $email, $situacao, $status)
    {
        if ($this->emailExists($email) == false) {
            $sql = "INSERT INTO users (nome, cpf, email, situacao, status) VALUES"
                    . " (:nome, :cpf, :email, :situacao, :status)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':cpf', $cpf);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':situacao', $situacao);
            $sql->bindValue(':status', $status);
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }

    public function edit($nome, $cpf, $email, $situacao, $status, $id)
    {
        $sql = "UPDATE users SET nome = :nome, cpf = :cpf, email = :email, situacao = :situacao, status = :status WHERE id = :id";
        $sql = $this->db->prepare($sql);
      
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':situacao', $situacao);
        $sql->bindValue(':status', $status);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    private function emailExists($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
