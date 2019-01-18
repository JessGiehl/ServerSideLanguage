<?php

class Welcome extends AppController{

  public function __construct($parent){

    $this->parent = $parent;

    $data = array();

    $data["page"] = "Home";

    $data["nav"] = array("Home"=>"/", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "Login"=>"/login");

    $this->getView("header");
    $this->getView("navigation",$data);

  }

  public function index(){
    $this->parent->getView("home");
    $this->parent->getView("footer");
  }

}

?>
