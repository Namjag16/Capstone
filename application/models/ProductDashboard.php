<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class ProductDashboard extends CI_Model{
        
        public function insert($var){
            $var['password'] = md5($var['password']);

            $query = "INSERT INTO user(first_name,last_name,email,password,created_at,updated_at) VALUES (?,?,?,?,?,?)";
            return $this->db->query($query,$var);
        }

        public function register_validate(){
            $this->load->library('form_validation');

            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'); //is_inique['user.email]
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[confirm_password]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required');

            if($this->form_validation->run()) {
                return "valid";
            } else {
               return array(validation_errors());
            }
        }

        public function login_validate(){
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if($this->form_validation->run()) {
                return "valid";
            } else {
               return array(validation_errors());
            }
        }

        public function login_process($post){
            $query = "SELECT * FROM user WHERE email = '{$post['email']}' AND password = '{$post['password']}'";
            $log = $this->db->query($query);

            if($log->num_rows() > 0){
                return true;
            }
            else{
                return false;
            }
        }


        // function get_all() '{$post['email']}' '{$post['password']}'
        // {
        //     return $this->db->query("SELECT id ,concat(first_name,' ',Last_name) AS Name, contact_number FROM contact_user")->result_array();
        // }

        // function delete($id){
        //     return $this->db->query("DELETE FROM contact_user WHERE id = ?",$id);
        // }

        // function get_data($id){
        //     return $this->db->query("SELECT id ,concat(first_name,' ',Last_name) AS Name, contact_number FROM contact_user WHERE id = ?",$id)->row_array();
        // }
        
        // function update($id,$user){
        //     $query = "UPDATE contact_user SET first_name = ?, last_name = ?, contact_number = ?  WHERE id = $id";
        //     return $this->db->query($query,$user);
        // }
    }
?>