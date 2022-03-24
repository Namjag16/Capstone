<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class contact extends CI_Model{
        
        public function insert($var){
            $query = "INSERT INTO contact_user(first_name,Last_name,contact_number,created_at,updated_at) VALUES (?,?,?,?,?)";
            return $this->db->query($query,$var);
        }

        function get_all()
        {
            return $this->db->query("SELECT id ,concat(first_name,' ',Last_name) AS Name, contact_number FROM contact_user")->result_array();
        }

        function delete($id){
            return $this->db->query("DELETE FROM contact_user WHERE id = ?",$id);
        }

        function get_data($id){
            return $this->db->query("SELECT id ,concat(first_name,' ',Last_name) AS Name, contact_number FROM contact_user WHERE id = ?",$id)->row_array();
        }
        
        function update($id,$user){
            $query = "UPDATE contact_user SET first_name = ?, last_name = ?, contact_number = ?  WHERE id = $id";
            return $this->db->query($query,$user);
        }
    }
?>