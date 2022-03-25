<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admins extends CI_Controller {

    /*  DOCU: this function will initialize every open
        Owner: BJ 
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin");
    }

    /*  DOCU: this function will validate the admin input. and will it know if the user is admin or not.
        Owner: BJ 
    */
    public function login(){
        $result = $this->Admin->login_validation($this->input->post());
        
        if($result == 'valid'){
            // echo "there";
            $result = $this->Admin->get_info($this->input->post());
            $role = $this->Admin->login_admin($result);

            if($role == 'admin'){
                $this->session->set_userdata(array('user_id'=>$result['id'], 'first_name'=>$result['first_name']));        
                redirect('/admin/dashboard');
            }
            else{
                echo "here";
                $this->session->set_flashdata('errors','Invalid Email or Password');
                redirect('admin');
            }
        }
        else{
            $this->session->set_flashdata('errors','Invalid Email or Password');
            redirect('admin');
        }
    }

   /*  DOCU: this function will desstroy the session and redirect the admin/user to the log in page.
        Owner: BJ 
    */
    public function logoff(){
        $this->session->sess_destroy();
        redirect('admin');
    }

    // public function register(){
    //     $this->User->register_validation($this->input->post());
    // }

    // /*  DOCU: this function will delete specific data 
    //     Owner: BJ 
    // */
    // public function delete(){
    //     // var_dump($this->input->post());
    //     $this->Sample->delete($this->input->post());
    //     $result["quotes"] = $this->Sample->fetch_all();
    //     $this->load->view("partials.php", $result);
    // }

    // /*  DOCU: this function will delete specific data 
    //     Owner: BJ 
    // */
    // public function update(){
    //     $order_update = $this->input->post();
    //     $this->Sample->update($order_update);
    //     $result["qoutes"] = $this->Sample->get_all();
    //     $this->load->view("partials.php", $result);
    // }
}