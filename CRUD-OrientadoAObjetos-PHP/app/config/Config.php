<?php

  $base = new URI();
  $base =  $base->base();
  
  define("BASE_URL", $base);
  // const BASE_URL = $base->base();
  // const BASE_URL = URI::base();
  
  // Dados para conectar base de dados
  const DB_HOST = "localhost";
  const DB_NAME = "crud_api_supermarket";
  const DB_USER = "root";
  const DB_PASSWORD = "";
  const DB_CHARSET = "utf8";

  //Delimitadores decimal e milhar exem. 24.000,00
  const SPD = ",";
  const SPM = ".";

  //Simbolo da moeda
  const SMONEY = "R$";

?>