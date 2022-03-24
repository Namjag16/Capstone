<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Students extends CI_Controller{
        
        public function index(){
            
            $key['gender'] = $this->input->post('gender');
            $key['year'] = $this->input->post('year');

            $this->load->model('student');
            $show['data'] = $this->student->get_all($key);
            $this->load->view('student',$show);

        }

    }
?>