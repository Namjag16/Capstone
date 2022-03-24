<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class store extends CI_Model{
        // insert area
        public function insert($val){
            $query = "INSERT INTO items(name,quantity,price,created_at,updated_at) VALUES (?,?,?,?,?)";
            return $this->db->query($query,$val);
        }

        public function insert_shirt($post){
            if($post['quantity'] <= 0 ){
                $this->session->set_flashdata('Tshirt_error','invalid quantity.');
                redirect('/');
            }
            else{
                $this->insert($post);
                $this->session->set_flashdata('success','Order has been saved');
                redirect('/');
            }
        }

        public function insert_cap($post){
            if($post['quantity'] <= 0 ){
                $this->session->set_flashdata('cap_error','invalid quantity.');
                redirect('/');
            }
            else{
                $this->insert($post);
                $this->session->set_flashdata('success','Order has been saved');
                redirect('/');
            }
        }

        public function insert_short($post){
            if($post['quantity'] <= 0 ){
                $this->session->set_flashdata('short_error','invalid quantity.');
                redirect('/');
            }
            else{
                $this->insert($post);
                $this->session->set_flashdata('success','Order has been saved');
                redirect('/');
            }
        }
        // end of inserting

        public function cart_count(){
            return $this->db->query("SELECT sum(quantity) as count FROM items")->row_array();
        }

        public function total_price(){
            return $this->db->query("SELECT sum(price) as total_price FROM items")->row_array();
        }

        public function get_all(){
            return $this->db->query("SELECT name as Product, sum(quantity) as Quantity, sum(price) as price From items
            GROUP BY Name
            ORDER BY PRODUCT ASC;")->result_array();
        }

        public function delete($name){
            return $this->db->query("DELETE FROM items WHERE name = ?",$name);
        }

        public function validate() {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('Name', 'Name', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('card_number', 'Card number', 'required');
            if($this->form_validation->run()) {
              return "valid";
            } else {
              return array(validation_errors());
            }
          }
    }
?>