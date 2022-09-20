<?php
  class Mysql extends Connection
  {
    private $connection;
    private $strQuery;
    private $arrValues;

    function __construct()
    {
      $this->connection = new Connection();
      $this->connection = $this->connection->getConnection();
      
      
    }

    public function insert(string $query = '', array $arrValues = []){
      $this->strQuery = $query;
      $this->arrValues = $arrValues;

      $insert = $this->connection->prepare($this->strQuery);

      $reInsert = $insert->execute($this->arrValues);

      if($reInsert){
        $lastInsert = $this->connection->lastInsertId();
      } else {
        $lastInsert = 0;
      }
      return $lastInsert;

    }

    public function select(string $query = ''){
      $this->strQuery = $query;

      $result = $this->connection->prepare($this->strQuery);
      $result->execute();
      $data = $result->fetch(PDO::FETCH_ASSOC);
    }

  }

  
?>