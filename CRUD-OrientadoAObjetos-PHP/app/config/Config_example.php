<?php
  // define("BASE_URL", "http://localhost/CRUD-OrientadoAObjetos-PHP/");
  // const BASE_URL = "http://localhost/CRUD-OrientadoAObjetos-PHP/";

  $base = new URI();
  $base =  $base->base();
  
  define("BASE_URL", $base);
  
  const DB_HOST = "localhost";
  const DB_NAME = "";
  const DB_USER = "";
  const DB_PASSWORD = "";
  const DB_CHARSET = "utf8";


?>