<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller {

    /*  DOCU: this function will initialize every open
        Owner: BJ 
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User");
    }

    public function login(){
        $this->User->login_validation($this->input->post());
    }
    public function register(){
        $this->User->register_validation($this->input->post());
    }

    /*  DOCU: this function will delete specific data 
        Owner: BJ 
    */
    public function delete(){
        // var_dump($this->input->post());
        $this->Sample->delete($this->input->post());
        $result["quotes"] = $this->Sample->fetch_all();
        $this->load->view("partials.php", $result);
    }

    /*  DOCU: this function will delete specific data 
        Owner: BJ 
    */
    public function update(){
        $order_update = $this->input->post();
        $this->Sample->update($order_update);
        $result["qoutes"] = $this->Sample->get_all();
        $this->load->view("partials.php", $result);
    }
}