<?php
class cadendController extends controller{

    public function index(){
        $dados = array();

        $this->loadTemplate('cadend', $dados);
    }
}