<?php
class Home extends Controllers {

  public function __construct()
  {
    parent::__construct();
  }

  public function Home(){
    $data['tag_page'] = "Home";
    $data['page_title'] = "Página principal";
    $data['page_name'] = "home";
    $data['page_content'] = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting";
    $this->views->getView($this, "home", $data);
  }

  public function register(){
    $data = $this->model->setUser("Marlon MVC", "marlon.paul@gmail.com");
    print_r($data);
  }

  public function user($id){
    $data = $this->model->getUser($id);
    print_r($data);
  }

  public function cart($params = ''){
    $carrinho = $this->model->getCart($params);
    echo "<br> Dados Carrinho: $params";
  }
}
?>