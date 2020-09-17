<?php
class menuController extends controller{
    public function index(){
        $dados = array();
        $this->loadTemplate('menu', $dados);
    }
}