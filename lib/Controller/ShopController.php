<?php

namespace Controller;
use Core\Controller;

class ShopController extends Controller
{
    public function index()
    {
        $this->view('Shop\index');
        $this->view->render();
    }

    public function vegetables(){
        $this->view('Shop\vegetables');
        $this->view->render();
    }

    public function search(){
        $this->view('Shop\search');
        $this->view->render();
    }

    public function vegetable($id=''){
        $this->view('Shop\vegetable',[
            'id' => $id
        ]);
        $this->view->render();
    }

    public function addVegetable()
    {
        $this->view('Shop\addvegetable');
        $this->view->render();
    }
}