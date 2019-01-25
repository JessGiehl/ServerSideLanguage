<?php
class users {
  public function __construct($parent){
    $this->parent = $parent;
  }

  public function select($sql,$value=array()){
    $this->sql = $this->parent->db->prepare($sql);
    $result = $this->sql->execute($value);
    $data = $this->sql->fetchAll();
    return $data;
  }

  public function add($sql,$value=array()){
    //PDO requires prepare, execute, fetch
    $this->sql = $this->parent->db->prepare($sql);
    $result = $this->sql->execute($value);
  }
}
 ?>
