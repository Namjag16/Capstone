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

    /*  DOCU: this function will validate the input
        Owner: BJ 
    */
    public function login(){
        $result = $this->User->login_validation($this->input->post());
        
        if($result == 'valid'){
            // echo "there";
            $result = $this->User->get_info($this->input->post());

            if ($result == NULL){
                $this->session->set_flashdata('error', 'Invalid Email or Password');
                redirect('login');
            }
            else{
                $role = $this->User->login_user($result);

                if($role == 'user'){
                    $this->session->set_userdata(array('user_id'=>$result['id'], 'first_name'=>$result['first_name']));        
                    $this->all_product();
                }
                else{
                    redirect('login');
                }
            }
        }
    }

    /*  DOCU: this function will logoff and destroy the session
        Owner: BJ 
    */
    public function logoff(){
        $this->session->sess_destroy();
        redirect('login');
    }

    /*  DOCU: this function will validate the registration input
        Owner: BJ 
    */
    public function register(){
        $this->User->register_validation($this->input->post());
    }
    /*  DOCU: this function will is to select all_product in specific table in database
        Owner: BJ 
    */
    public function all_product(){
        $result['data'] = $this->User->all_items();
        $this->load->view('product.php',$result);
    }
    /*  DOCU: this function will is to select a specific data in database
        Owner: BJ 
    */
    public function show($id){
        $info = $this->User->get_data($id);
        $this->load->view('show.php',$info);

        $result['data'] = $this->User->similar($id);
        $this->load->view('footer.php',$result);
    }
    /*  DOCU: this function will is save the info in the database.
        Owner: BJ 
    */
    public function save_at_carts(){
        $post = $this->input->post();
        $result = $this->User->save_at_database($post);
    }

    public function show_all_carts(){
        $user_id = $this->session->user_id;
        $result['data'] = $this->User->get_all_carts($user_id);
        $this->load->view('carts',$result);
    }

    public function shipping_info(){
        // var_dump($this->input->post());
        
        $this->User->shipping_info_validate($this->input->post());
        
    }
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