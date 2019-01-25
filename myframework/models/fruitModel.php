<?
class fruitModel{

  public function __construct($parent){

    $this->parent = $parent;
  }


  public function getAll(){

    $q = "select * from fruit_table";
    $stmt = $this->parent->parent->db->prepare($q);
    $stmt->execute();
    $fruit = $stmt->fetchAll();
    return $fruit;

  }

  public function getOne($id){

    $q = "select * from fruit_table where id = :id";
    $stmt = $this->parent->parent->db->prepare($q);
    $stmt->execute(array(":id"=>$id));
    $fruit = $stmt->fetchAll();
    return $fruit;

  }

  public function update($sql= "", $obj = array()){

    $stmt = $this->parent->parent->db->prepare($sql);
    $stmt->execute($obj);

  }

  public function delete($sql= "", $obj = array()){

    $stmt = $this->parent->parent->db->prepare($sql);
    $stmt->execute($obj);

  }

  public function add($sql= "", $obj = array()){

    $stmt = $this->parent->parent->db->prepare($sql);
    $stmt->execute($obj);

  }
}
?>
