<?php

class Uploads extends AppController{

  public function __construct($parent){

    $this->parent = $parent;

    $data = array();

    $data["page"] = "Uploads";

    $data["nav"] = $this->parent->nav;

    $this->getView("header");
    $this->getView("navigation",$data);

  }

  public function index(){
    $data = array();

    $data["page"] = "Uploads";


    $this->parent->getView("uploads");
    $this->parent->getView("footer");
  }

  public fuction uploadFile(){

    if($_FILES["myfile"]["type"]=="text/xml"){

      if (move_uploaded_file($_FILES["myfile"]["tmp_name"], "./assets/myfile.xml")){


      } else {

        header("location:/uploads?msg=Something bad happened")
      }


    } else {

      header("location:/uploads?msg=Wrong File Type")
    }
  }

}

?>
