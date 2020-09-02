<?php

class homeController extends controller
{
    public function index()
    {
        $dados = array();

        $users = new Users();
        $dados['lista'] =$users->getAll();

        $this->loadTemplate('home', $dados);
    }
}
