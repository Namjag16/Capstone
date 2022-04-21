<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Model{
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
            }else {
                $errors = validation_errors();
                $this->session->set_flashdata('error', $errors);
                redirect("admin");
            }
        }

        /*  DOCU:  This function will get the information in database in will match it, then if it is not match it will return errors.
            Owner: BJ  result_array()[0]
        */
        public function get_info($post){
            $pass = md5($post['password']);
            return $this->db->query("SELECT * FROM Users WHERE email = '{$post['email']}' AND password = '$pass' ")->row_array();
            // var_dump($post);
        }

        /*  DOCU:  This function will determined if the user is ADMIN or ordinary user;
            Owner: BJ 
        */
        public function login_admin($result){
            if($result && $result['role'] == 'admin' ){
                return "admin";
            }
            else{
                $this->session->set_flashdata('error', 'Invalid Account');
                redirect('admin');
            }
        }

        public function get_all_Shipping_info(){
            return $this->db->query ("SELECT  shipping_info.users_id,shipping_info.id, shipping_info.billing_first_name as Name, DATE_FORMAT(shipping_info.created_at, '%m-%d-%Y') as date, concat(billing_address,' ', billing_city,' ',billing_state,' ',billing_zip) as Billing_Address , SUM(cart.price) as total
                        FROM shipping_info 
                        LEFT JOIN cart
                        ON shipping_info.users_id = cart.users_id;")->result_array();
        }

        public function get_show_details($id){
            return $this->db->query ("SELECT * FROM shipping_info WHERE users_id = ?",$id)->result_array();
        }

        public function get_show_cart($id){
            return $this->db->query ("SELECT id,items,price,quantity, (price * quantity) as Total FROM cart WHERE users_id = ?",$id)->result_array();
        }

        public function get_show_product(){
            return $this->db->query ("SELECT * FROM items")->result_array();
        }
        
        public function select_product($id){
            return $this->db->query ("SELECT * FROM items where id = ?",$id)->row_array();
        }

        public function edit_action($post){
            var_dump($post);
            if(isset($post['data']['action']) && $post['data']['action'] == 'Cancel' ){
                redirect(base_url('/admins/show_product'));
                // echo "cancel";
            }elseif(isset($post['data']['action']) && $post['data']['action'] == 'Preview' ){
                redirect(base_url('/admins/preview/').$post['id']);
                // echo "preview";
            }else{
                echo 'Update';
            }
        }
        // function get_all()
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