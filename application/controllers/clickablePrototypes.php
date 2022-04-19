<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ClickablePrototypes extends CI_Controller {

    /*  DOCU: this function will initialize every open
        Owner: BJ 
    */
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model("Sample");
    // }
    // public function index_html()
    // {
    //     $result["quotes"] = $this->Sample->fetch_all();
    //     $this->load->view("partials.php", $result);
    // }

    /*  DOCU: this is will triggered when ADD note click and will add the notes in database
        Owner: BJ 
    */
    // public function create()
    // {
    //     $new_quote = $this->input->post();
    //     $this->Sample->create($new_quote);
    //     $result["quotes"] = $this->Sample->fetch_all();
    //     $this->load->view("partials.php", $result);
    // }

    /*  DOCU: this function will always the first function that will read by the program because it is index.
        Owner: BJ 
    */
    public function index()
    {
        $this->load->view('Prototype');
    }
    public function login(){
        $this->load->view('login');
    }
    public function product(){
        $this->load->view('product');
    }
    public function show(){
        $this->load->view('show');
    }
    public function cart(){
        $this->load->view('carts');
    }
    public function admin(){
        $this->load->view('admin/admin');
    }
    public function dashboard(){
        $this->load->view('admin/dashboard');
    }
    public function show_product(){
        $this->load->view('admin/product');
    }
    public function edit(){
        $this->load->view('admin/edit');
    }
    public function add(){
        $this->load->view('admin/add');
    }
    public function show_details(){
        $this->load->view('admin/show');
    }
    public function register(){
        $this->load->view('register');
    }
    public function logoff(){
        $this->session->sess_destroy();
        $this->load->view('admin/admin');
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