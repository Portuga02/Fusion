<?php

class HomeController extends controller
{
    public function index()
    {
        $dados = array();

        $users = new UsersModels();
        $dados['lista'] =$users->getAll();

        $this->loadTemplate('home', $dados);
    }
}
