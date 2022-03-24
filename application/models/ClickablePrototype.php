<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ClickableProrotype extends CI_Model {

  /*  DOCU: this function will fetch the data in database
      Owner: BJ 
  */
  public function fetch_all()
  {
    return $this->db->query("SELECT * FROM quotes")->result_array();
  }
  
   /*  DOCU: this function will insert the data in database
      Owner: BJ 
  */
  public function create($new_quote)
  {
    $query = "INSERT INTO quotes (title, notes) VALUES (?, ?)";
    $values = array($new_quote['author'], $new_quote['quote']);
    return $this->db->query($query, $values);
  }

  /*  DOCU: this function will delete the data in database
      Owner: BJ 
  */
  public function delete($id){
    return $this->db->query("DELETE FROM quotes WHERE id = ?",$id);
  }

    /*  DOCU: this function will update the data in database
        Owner: BJ 
    */
  public function update($order){
    $query = "UPDATE quotes SET notes = ? WHERE id = ?";
    $value['id'] = $order['notes'];
    $value['order'] = $order['id'];
    return $this->db->query($query,$value);
  }
}