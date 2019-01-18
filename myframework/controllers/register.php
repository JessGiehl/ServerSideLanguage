<?php

class Register extends AppController{

  public function __construct($parent){

    $this->parent = $parent;

    $data = array();

    $data["page"] = "Register";

    $data["nav"] = array("Home"=>"/", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "Login"=>"/login");

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
        echo "Successful Registration <br/>";
        echo "Name: ".$name."<br/>";
        echo "Password: ".$password."<br/>";
        echo "Age: ".$_POST["age"]."<br/>";
        echo "Gender: ".$_POST["gender"]."<br/>";
        echo "Bio: ".$_POST["bio"]."<br/>";
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
