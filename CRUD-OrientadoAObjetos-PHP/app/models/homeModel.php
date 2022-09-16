<?php
  class homeModel
  {
    public function __construct()
    {
      echo "Mensagem do HomeModel";
    }

    public function getCart($param){
      return $param;
    }
  }
?>