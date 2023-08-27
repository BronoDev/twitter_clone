<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;

class IndexController extends Action
{

    public function index()
    {
        //$this->view->dados = array('sofá', 'cadeira', 'cama');

        //instancia de conexão
        $conn = Connection::getBd();

        //instanciar modelo
        $produto = new Produto($conn);

        $produtos = $produto->getProdutos();

        @$this->view->dados = $produtos;

        $this->render('index', 'layout1');
    }

    public function sobreNos()
    {
        //$this->view->dados = array('notebook', 'smartphone');
        $this->render('sobreNos', 'layout1');
    }

}

?>