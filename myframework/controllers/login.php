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
        //read the user file and store it as an array
        $lines = file('./bin/user.txt');
        //seperate array for exploded values
        $users = array();

        //loop through each line of the user.txt
        foreach ($lines as $line_num => $line) {
          //and explode it using the delimiter, push those values into users array
          array_push($users, explode('|', $line));

          //check values in users array against the submitted values
          if(strtolower($_REQUEST["username"])==strtolower($users[$line_num][0]) && $_REQUEST["password"]==$users[$line_num][1]){
            //if there's a match, log them in!
            $_SESSION["isloggedin"] = "1";
            $_SESSION["name"] = $users[$line_num][0];
            header("location:/dash/profile");
          }
        }
        if($_SESSION["isloggedin"] == "0"){
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
