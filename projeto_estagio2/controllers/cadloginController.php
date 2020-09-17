<?php
class cadloginController extends controller{

    public function index(){
        $dados = array(
            
        );

        $this->loadTemplate('cadlogin', $dados);
    }
}