<?php

class Login extends AppController{

  public function __construct($parent){

    $this->parent = $parent;

  }

  public function index(){

    $data = array();

    $data["page"] = "Login";

    $data["nav"] = $this->parent->nav;

    //set random string for captcha
    $random = substr( md5(rand()), 0, 7);

    $this->getView("header");
    $this->getView("navigation",$data);

    $this->parent->getView("login", array("cap"=>$random));
    $this->parent->getView("footer");
  }

  public function validate(){

    //reset session variables on submit
    $_SESSION["isloggedin"] = "0";
    $_SESSION["name"] = "";

    //check if all forms are filled
    if($_REQUEST["username"] && $_REQUEST["password"]){
      //check if captcha was successful
      if ($_REQUEST["cap"] == $_SESSION["cap"]){

        $sql = "select * from users where name = :name and password = :password";
        $values = array(":name"=>$_REQUEST["username"],":password"=>sha1($_REQUEST["password"]));
        $userdata = $this->parent->getModel("users")->select($sql, $values);
        if($userdata){
          $_SESSION["isloggedin"] = "1";
          $_SESSION["id"] = $userdata[0][0];
          header("location:/dash/profile");
        } else {
          header("location:/login?msg=Bad Login");
        }
      } else {
        header("location:/login?msg=Incorrect captcha");
      }
    } else {
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
