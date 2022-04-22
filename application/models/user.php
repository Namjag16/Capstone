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

        /*  DOCU: this function will validate the login input form and will match the data in database.    
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
            return $this->db->query("SELECT * FROM Users WHERE email = '{$post['email']}' AND password = '$pass' ")->row_array();
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
                $this->session->set_flashdata('error', 'Invalid! The account is ADMIN');
                redirect('login');
            }
        }
        /*  DOCU:  This function will show all the data in items
            Owner: BJ 
        */
        public function all_items(){
            return $this->db->query("SELECT * FROM items")->result_array();
        }
        /*  DOCU:  This function will get the specific data base on ID of the items
            Owner: BJ 
        */
        public function get_data($id){
            return $this->db->query("SELECT * FROM items WHERE id = ?",$id)->row_array();
        }
        /*  DOCU:  This function will always get the 5 of the items base of what number item is selected
            Owner: BJ 
        */
        public function similar($id){
            $end = $id + 5;
            return $this->db->query("SELECT * FROM items WHERE id BETWEEN $id and $end limit 5;")->result_array();
        }
        /*  DOCU:  This function will insert item of the user will bought quantity,items etc.
            Owner: BJ 
        */
        public function save_at_database($post){
            
            if(!is_numeric($post['quantity']) || $post['quantity'] <= 0){
                $this->session->set_flashdata('error', 'Invalid input for quantity');
                redirect("users/show/".$post['item_id']);
            }else{
                $query = "INSERT INTO cart(users_id,item_id,items,price,quantity,created_at,updated_at) VALUES(?,?,?,?,?,NOW(),NOW())";
                $this->db->query($query,$post);
                $this->session->set_flashdata('sucess', 'Item added at cart');
                redirect("users/show/".$post['item_id']);
            }
        }
        /*  DOCU:  This function will get all information in the carts
            Owner: BJ 
        */
        public function get_all_carts($id){
            return $this->db->query("SELECT items,price,quantity, (price * quantity) as total FROM cart WHERE users_id = ?;",$id)->result_array();
        }
        /*  DOCU:  This function will insert shipping info in database
            Owner: BJ 
        */
        public function insert_shipping($var){
            $query = "INSERT INTO shipping_info (users_id, first_name ,last_name ,address ,address_2 ,City ,State ,zip ,billing_first_name ,billing_last_name ,billing_address ,billing_address_2 ,billing_city ,billing_state ,billing_zip ,card ,security_code ,total,created_at,updated_at) 
                        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            return $this->db->query($query,$var);
        }
        /*  DOCU:  This function will validate the data in shipping info
            Owner: BJ 
        */
        public function shipping_info_validate($info){
            // var_dump($this->input->post());
            $this->load->library('form_validation');

            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('address', 'Address', 'trim|required');
            $this->form_validation->set_rules('address2', 'Address 2', 'trim|required'); 
            $this->form_validation->set_rules('city', 'City', 'trim|required');
            $this->form_validation->set_rules('state', 'State', 'trim|required');
            $this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|required|numeric');

            $this->form_validation->set_rules('bill_first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('bill_last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('bill_address', 'Address', 'trim|required');
            $this->form_validation->set_rules('bill_address2', 'Address 2', 'trim|required'); 
            $this->form_validation->set_rules('bill_city', 'City', 'trim|required');
            $this->form_validation->set_rules('bill_state', 'State', 'trim|required');
            $this->form_validation->set_rules('bill_zip_code', 'Zip Code', 'trim|required|numeric');
            
            $this->form_validation->set_rules('bill_card', 'Card number', 'trim|required|numeric');
            $this->form_validation->set_rules('bill_security_code', 'Security code', 'trim|required|numeric');

            if($this->form_validation->run()) {
                $data['users_id'] = $this->session->user_id;
                $data['first_name'] = $info['first_name'];
                $data['last_name'] = $info['last_name'];
                $data['address'] = $info['address'];
                $data['address_2'] = $info['address2'];
                $data['city'] = $info['city'];
                $data['state'] = $info['state'];
                $data['zip_code'] = $info['zip_code'];

                $data['bill_first_name'] = $info['bill_first_name'];
                $data['bill_last_name'] = $info['bill_last_name'];
                $data['bill_address'] = $info['bill_address'];
                $data['bill_address_2'] = $info['bill_address2'];
                $data['bill_city'] = $info['bill_city'];
                $data['bill_state'] = $info['bill_state'];
                $data['bill_zip_code'] = $info['bill_zip_code'];

                $data['card'] = $info['bill_card'];
                $data['security_code'] = md5($info['bill_security_code']);
                $data['total'] =$info['total'];

                $data['created_at'] =  date("Y-m-d h:i:s");
                $data['updated_at'] =  date("Y-m-d H:i:s");

                var_dump($data);
                $this->insert_shipping($data);
                $this->session->set_flashdata('success','Succesfully Checkout.');
                redirect('users/show_all_carts/'.$this->session->user_id);
                
            } else {
                $errors = validation_errors();
                $this->session->set_flashdata('error', $errors);
                redirect('users/show_all_carts/'.$this->session->user_id);

             
            }
        }
    }
?>