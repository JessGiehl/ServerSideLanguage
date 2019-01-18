<?php

class Login extends AppController{

  public function __construct($parent){

    $this->parent = $parent;

  }

  public function index(){
    $data = array();

    $data["page"] = "Login";

    $data["nav"] = array("Home"=>"/", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "Login"=>"/login");

    $this->getView("header");
    $this->getView("navigation",$data);

    $this->parent->getView("login");
    $this->parent->getView("footer");
  }

  public function ajaxPars(){
    if(@$_REQUEST["name"]=="Jessica" && @$_REQUEST["password"]=="password"){
      echo "welcome";
    } else {
      echo "invalid";
    }
  }

}

?>
