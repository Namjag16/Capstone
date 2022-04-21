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
            $result = $this->Admin->get_info($this->input->post());
            
            if ($result == NULL){
                $this->session->set_flashdata('error', 'Invalid Email or Password');
                redirect('admin');
            }
            else{
                $role = $this->Admin->login_admin($result);

                if($role == 'admin'){
                    $this->session->set_userdata(array('user_id'=>$result['id'], 'first_name'=>$result['first_name']));        
                    // redirect('/admin/dashboard');
                    // $result['data'] = $this->Admin->get_all_Shipping_info();
                    // $this->load->view('admin/dashboard.php',$result);
                    $this->dashboard();
                }
                else{
                    // echo "here";
                    $this->session->set_flashdata('error','Invalid Email or Password');
                    redirect('admin');
                }
            }
        }
    }

   /*  DOCU: this function will desstroy the session and redirect the admin/user to the log in page.
        Owner: BJ 
    */
    public function logoff(){
        $this->session->sess_destroy();
        redirect('admin');
    }

    public function dashboard(){
        $result['data'] = $this->Admin->get_all_Shipping_info();
        $this->load->view('admin/dashboard.php',$result);
    }

    public function show_details($id){  
        $result['data'] = $this->Admin->get_show_details($id);
        $this->load->view('admin/show.php',$result);

        $cart['info'] = $this->Admin->get_show_cart($id);
        $this->load->view('admin/show_cart.php',$cart);
    }

    public function show_product(){
        $result['data'] = $this->Admin->get_show_product();
        $this->load->view('admin/product.php',$result);
    }

    public function edit_product($id){
        $result = $this->Admin->select_product($id);
        $this->load->view('admin/edit.php',$result);
    }

    public function edit_product_action($id){
        $result['data'] = $this->input->post();
        $result['id'] = $id;
        $this->Admin->edit_action($result);
        
    }

    public function preview($id){
        $result = $this->Admin->select_product($id);
        $this->load->view('admin/preview.php',$result);
    }
    public function add_product(){
        var_dump($this->input->post());
        $file = $_FILES['image'];

        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];

        // echo $fileName;
        // echo $fileTmpName;
        // echo $fileSize;
        // echo $fileError;
        // echo $fileType;

        var_dump($file);
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