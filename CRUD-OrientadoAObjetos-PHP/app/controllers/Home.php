<?php
class Home {

  public function __construct()
  {
    
  }

  public function Home($params){
    echo "<br> Estou no Home: $params";
  }

  public function data($params){
    echo "<br> Dados recebidos: $params";
  }
}
?>