<?php
class consultardoacaoController extends controller{

    public function index(){
        $dados = array();

        $this->loadTemplate('consultardoacao', $dados);
    }
}