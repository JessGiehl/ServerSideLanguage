<?php

class Welcome extends AppController{

  public function __construct($parent){

    $this->parent = $parent;

    $this->nav = array("home"=>"/home", "about"=>"/about", "contact"=>"/contact");

  }

  public function home(){
    $data = array();

    //bind the navigation array to our data array so it can be passed into the view
    $data["nav"] = $this->nav;

    $this->parent->getView("navigation",$data);
    $this->parent->getView("body",$data);
    $this->parent->getView("footer");
  }

  public function about(){
    $data = array();

    $data["nav"] = $this->nav;

    $this->parent->getView("navigation",$data);
    $this->parent->getView("body",$data);
    $this->parent->getView("footer");
  }

  public function contact(){
    $data = array();

    $data["nav"] = $this->nav;

    $this->parent->getView("navigation",$data);
    $this->parent->getView("body",$data);
    $this->parent->getView("footer");
  }

}


?>
