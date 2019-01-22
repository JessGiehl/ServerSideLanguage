<?
class dash extends AppController{
  public function __construct($parent){
    $this->parent=$parent;
    //does this session variable exist and is its value not "yes"?
    if (@!$_SESSION["isloggedin"] || @$_SESSION["isloggedin"]!="1"){
      header("location:/login?msg=Please Login First");
    }
    $data = array();

    $data["page"] = "Profile";

    $data["nav"] = $this->parent->nav;

    $this->getView("header");
    $this->getView("navigation",$data);
  }

  public function profile(){

    $this->parent->getView("profile");
    $this->parent->getView("footer");
  }

  public function logout(){
    session_destroy();
    header("location:/login");
  }
}
?>
