<?php
class recuperarSenhaController extends controller{
    public function index(){
        $dados = array();
        $this->loadTemplate('recuperarsenha', $dados);
    }
}