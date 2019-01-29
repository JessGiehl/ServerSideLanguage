<?php
class fruitModel extends CI_Model{

  public function getDetail($id){

    $query = $this->db->query('select * from fruit_table where id = ?',array($id));
    return $query->result();

  }
}
?>
