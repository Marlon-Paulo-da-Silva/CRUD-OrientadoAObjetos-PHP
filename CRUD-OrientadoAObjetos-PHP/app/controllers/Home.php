<?php
class Home extends Controllers {

  public function __construct()
  {
    parent::__construct();
  }

  public function Home(){
    $this->views->getView($this, "home");
  }

  public function data($params){
    echo "<br> Dados recebidos: $params";
  }

  public function cart($params){
    $carrinho = $this->model->getCart($params);
    echo "<br> Dados Carrinho: $carrinho";
  }
}
?>