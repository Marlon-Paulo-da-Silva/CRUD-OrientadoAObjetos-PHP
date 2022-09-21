<?php
  class homeModel extends Mysql
  {
    public function __construct()
    {
      parent::__construct();
    }

    public function setUser(string $name, int $email){

      $query_insert = "INSERT INTO users";

      return $name;
    }
  }
?>