<?php

class Register extends AppController{

  public function __construct($parent){

    $this->parent = $parent;

    $data = array();

    $data["page"] = "Register";

    $data["nav"] = $this->parent->nav;

    $this->getView("header");
    $this->getView("navigation",$data);
  }

  public function index(){

    $this->getView("registerForm");
    $this->getView("footer");

  }

  public function processForm(){

    //check the values of data being posted to this method, see if they are blank
    if($_REQUEST["name"]!="" && $_REQUEST["password"]!=""){
      //if no blank fields, check name and password
      $name = $_POST["name"];
      $nameCheck = false;
      $passwordCheck = false;
      //check if name is valid using regular expresion
      if (preg_match("/^[a-zA-Z ]*$/",$name)){
        $nameCheck = true;
      } else {
        echo " Only letters allowed in name.";
      }
      $password = $_POST["password"];
      if (preg_match("/^(?=.*\d).{4,12}$/",$password)){
        $passwordCheck = true;
      } else {
        echo " Password must be between 4 and 12 digits long and include at least one numeric digit.";
      }
      if ($nameCheck && $passwordCheck){
        $sql = "insert into users (name, password, bio) values(:name, :password, :bio)";
        $val = array(":name"=>$name, ":password"=>sha1($password), ":bio"=>$_POST["bio"]);
        $this->parent->getModel("users")->add($sql,$val);
        header("location:/login?success=Registration successful, please log in.");
      } else {
        $this->getView("registerForm");
      }
    } else {
      echo "Please fill out required forms.";
      $this->getView("registerForm");
    }

    $this->getView("footer");

  }

}

?>
