<?php
  
  $base = new URI();
  $base =  $base->base();
  
  define("BASE_URL", $base);
  // const BASE_URL = $base->base();
  // const BASE_URL = URI::base();
  
  const DB_HOST = "localhost";
  const DB_NAME = "crud_api_supermarket";
  const DB_USER = "root";
  const DB_PASSWORD = "";
  const DB_CHARSET = "utf8";


?>