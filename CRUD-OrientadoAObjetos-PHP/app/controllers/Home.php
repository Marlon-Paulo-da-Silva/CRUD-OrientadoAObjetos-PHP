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
    $data = $this->model->setUser("Hugo MVC", "hugo@gmail.com");
    $data = $this->model->setUser("Gabriel MVC", "gabo@gmail.com");

    print_r($data);
  }

  public function user($id){
    $data = $this->model->getUser($id);
    print_r($data);
  }
  
  public function update(){
    $data = $this->model->updateUser(1, "Marlon", "marlon@gmail");
    print_r($data);
  }

  public function users($id){
    $data = $this->model->getUsers($id);
    
    echo json_encode($data);
  }

  public function cart($params = ''){
    $carrinho = $this->model->getCart($params);
    echo "<br> Dados Carrinho: $params";
  }

  public function deleteuser($id){
    $data = $this->model->delUser($id);
    print_r($data);
  }

}
?>