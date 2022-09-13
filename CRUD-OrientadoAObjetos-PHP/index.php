<h1>Loja virtual</h1>

<?php
  $url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
  $arrUrl = explode("/", $url);

  echo $url;
?>