<?php
  class homeModel extends Mysql
  {
    public function __construct()
    {
      parent::__construct();
    }

    public function teste(){
      echo "MODEL funções teste";
    }

    public function setUser(string $name, string $email){

      $query_insert = "INSERT INTO users (username, email) VALUES (?, ?)";
      $arrData = array($name, $email);
      $request_insert = $this->insert($query_insert, $arrData);

      return $request_insert;
    }

    public function getUser($id){

      $query = "SELECT username, email FROM users WHERE id = {$id}";
      $request = $this->select($query);

      return $request;
    }
  }
?>