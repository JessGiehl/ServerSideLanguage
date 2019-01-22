<?php

class About extends AppController{

  public function __construct($parent){

    $this->parent = $parent;

    $data = array();

    $data["page"] = "About";

    $data["nav"] = $this->parent->nav;

    $this->getView("header");
    $this->getView("navigation",$data);

  }

  public function index(){
    $this->parent->getView("about");
    $this->parent->getView("footer");
  }

}

?>
