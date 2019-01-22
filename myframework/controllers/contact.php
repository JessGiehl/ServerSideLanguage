<?php

class Contact extends AppController{

  public function __construct($parent){

    $this->parent = $parent;

    $data = array();

    $data["page"] = "Contact";

    $data["nav"] = $this->parent->nav;

    $this->getView("header");
    $this->getView("navigation",$data);

  }

  public function index(){
    $this->parent->getView("contact");
    $this->parent->getView("footer");
  }

}

?>
