<?php

require_once './google-api-php-client-2.2.2/vendor/autoload.php';

class Api extends AppController{

  public function __construct($parent){

    $this->parent = $parent;

    $data = array();

    $data["page"] = "Api";

    $data["nav"] = $this->parent->nav;

    $client = new Google_Client();
    $this->client = $client;
    $client->setAuthConfig('./google-api-php-client-2.2.2/vendor/client_secret.json');
    $client->setAccessType('offline');        // offline access
    $client->setIncludeGrantedScopes(true);   // incremental auth
    $client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);
    $client->setRedirectUri('http://localhost/api/recv');

    $this->getView("header");
    $this->getView("navigation",$data);

  }

  public function index(){
    $auth_url = $this->client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
    $this->parent->getView("footer");
  }

  public function recv(){
    $this->client->authenticate($_GET['code']);
    $access_token = $this->client->getAccessToken();
    $this->client->setAccessToken($access_token);
    $drive = new Google_Service_Drive($this->client);
    $data["files"] = $drive->files->listFiles(array())->getFiles();
    $this->parent->getView("drive", $data);
    $this->parent->getView("footer");
  }

}

?>
