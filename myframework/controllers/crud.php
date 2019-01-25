<?php

class Crud extends AppController{

  public function __construct($parent){

    $this->parent = $parent;

    $data = array();

    $data["page"] = "Crud";

    $data["nav"] = $this->parent->nav;

    $this->getView("header");
    $this->getView("navigation",$data);

  }

  public function index(){
    $data["items"] = $this->getModel("fruitModel")->getAll();
    $this->parent->getView("list", $data);
    $this->parent->getView("footer");
  }

  public function updateForm(){
    $data["items"] = $this->getModel("fruitModel")->getOne($this->parent->urlPathParts[2]);
    $this->parent->getView("updateForm", $data);
    $this->parent->getView("footer");
  }

  public function updateAction(){
    //update
    $this->getModel("fruitModel")->update("update fruit_table set name=:name where id = :id", array(":name"=>$_POST["name"],":id"=>$_POST["id"]));
    header("location:/crud");
  }

  public function delete(){

    $sql = "delete from fruit_table where id = :id";
    //use the url path parts to figure out which id is being passed into this method
    $val = array(":id"=>$this->parent->urlPathParts[2]);
    $this->getModel("fruitModel")->delete($sql,$val);
    //bring user back to list
    header("location:/crud");

  }

  public function addForm(){

    $this->getView("addform");
    $this->getView("footer");

  }

  public function addAction(){

    $sql = "insert into fruit_table (name) values(:name)";
    $val = array(":name"=>$_REQUEST["name"]);
    $this->getModel("fruitModel")->add($sql,$val);
    header("location:/crud");

  }


}

?>
