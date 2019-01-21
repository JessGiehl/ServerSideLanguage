<?php

class Login extends AppController{

  public function __construct($parent){

    $this->parent = $parent;

  }

  public function index(){

    $data = array();

    $data["page"] = "Login";

    $data["nav"] = array("Home"=>"/", "About"=>"/about", "Contact"=>"/contact", "Register"=>"/register", "Login"=>"/login");

    //set random string for captcha
    $random = substr( md5(rand()), 0, 7);

    $this->getView("header");
    $this->getView("navigation",$data);

    $this->parent->getView("login", array("cap"=>$random));
    $this->parent->getView("footer");
  }

  public function validate(){
    if($_REQUEST["username"] && $_REQUEST["password"]){
      if ($_REQUEST["cap"] == $_SESSION["cap"]){
        if($_REQUEST["username"]=="Jessica" && $_REQUEST["password"]=="password"){
          $_SESSION["isloggedin"] = "yes";
          $_SESSION["name"] = $_REQUEST["username"];
          header("location:/dash/landing");
        } else {
          $_SESSION["isloggedin"] = "no";
          $_SESSION["name"] = "";
          header("location:/login?msg=Bad Login");
        }
      } else {
        $_SESSION["isloggedin"] = "no";
        $_SESSION["name"] = "";
        header("location:/login?msg=Incorrect captcha");
      }
    } else {
      $_SESSION["isloggedin"] = "no";
      $_SESSION["name"] = "";
      header("location:/login?msg=Please fill out all forms");
    }
  }

  public function ajaxPars(){
    if(@$_REQUEST["username"]=="Jessica" && @$_REQUEST["password"]=="password"){
      echo "welcome";
    } else {
      echo "invalid";
    }
  }

}

?>
