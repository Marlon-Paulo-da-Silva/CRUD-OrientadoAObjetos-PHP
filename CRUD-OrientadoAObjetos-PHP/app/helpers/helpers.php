<?php
  require_once("app/helpers/uri.php");

  function base_url()
  {
    return BASE_URL;
  }

  function dep($data)
  {
    $format = print_r('<br><br><pre>');
    $format .= print_r($data);
    $format .= print_r('<pre><br><br>');

    return $format;
  }
?>