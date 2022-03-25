<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class User extends CI_Model{
        /*     DOCU: this function will triggered if the register_validation is TRUE, and will insert specific input to the database.     
        Owner: BJ 
        */
        public function register_insert($var){
            $query = "INSERT INTO Users(first_name,Last_name,contact_number,email,password,role,created_at,updated_at) VALUES (?,?,?,?,?,?,?,?)";
            return $this->db->query($query,$var);
        }
        /*     DOCU: this function will validate the register input form and will registerd and save it in database.    
        Owner: BJ 
        */
        public function register_validation($var){
            // var_dump($var);
            $this->load->library('form_validation');

            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('contact_num', 'contact number', 'trim|required|numeric|min_length[11]|max_length[11]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'); 
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[c_password]');
            $this->form_validation->set_rules('c_password', 'Confirm Password', 'trim|required');

            if($this->form_validation->run()) {
                $data['first_name'] = $this->input->post('first_name');
                $data['last_name'] = $this->input->post('last_name');
                $data['contact_num'] = $this->input->post('contact_num');
                $data['email'] = $this->input->post('email');
                $data['password'] = md5($this->input->post('password'));
                $data['role'] = 'user';
                $data['created_at'] =  date("Y-m-d h:i:s");
                $data['updated_at'] =  date("Y-m-d H:i:s");

                $this->register_insert($data);
                $this->session->set_flashdata('success','Succesfully registered.');
                redirect("register");
                
            } else {
                $errors = validation_errors();
                $this->session->set_flashdata('error', $errors);
                redirect("register");
            }
        }

        /*     DOCU: this function will validate the login input form and will match the data in database.    
        Owner: BJ 
        */
        public function login_validation($var){
            // var_dump($var);
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'); 
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');

            if($this->form_validation->run()) {
                return "valid";      
            } else {
                $errors = validation_errors();
                $this->session->set_flashdata('error', $errors);
                redirect("login");
            }
        }

        /*  DOCU:  This function will get the information in database in will match it, then if it is not match it will return errors.
            Owner: BJ  result_array()[0]
        */
        public function get_info($post){
            $pass = md5($post['password']);
            return $this->db->query("SELECT * FROM Users WHERE email = '{$post['email']}' AND password = '$pass' ")->result_array()[0];
            // var_dump($post);
        }

        /*  DOCU:  This function will determined if the user is ADMIN or ordinary user;
            Owner: BJ 
        */
        public function login_user($result){
            if($result && $result['role'] == 'user' ){
                return "user";
            }
            else{
                $this->session->set_flashdata('error', 'Invalid Account');
                redirect('login');
            }
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