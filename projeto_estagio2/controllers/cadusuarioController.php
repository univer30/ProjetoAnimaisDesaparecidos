<?php
class cadusuarioController extends controller{
    public function index(){
        $dados = array();
        $this->loadTemplate('cadusuario', $dados);
    }
}