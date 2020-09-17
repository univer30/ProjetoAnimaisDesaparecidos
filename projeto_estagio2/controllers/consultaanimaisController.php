<?php
class consultaanimaisController extends controller{

    public function index(){
        $dados = array();

        $this->loadTemplate('consultaanimais', $dados);
    }
}