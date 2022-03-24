<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Bookmarks extends CI_Controller{
        
        public function index(){
            $this->load->model('Bookmark');
            $value['web'] = $this->Bookmark->get_all();
            $this->load->view('bookmark/bookmark.php',$value);
        }

        public function process(){
            $error = array();
            if( $this->input->post('action') == 'add_bookmark'){
                if(empty($this->input->post('name'))){
                    $error[] = 'name is empty';
                }
                elseif(empty($this->input->post('URL'))){
                    $error[] = 'URL is empty';
                }
                elseif(empty($this->input->post('folder'))){
                    $error[] = 'Folder is empty';
                }
            }
            if(empty($error)){
            $website = array();
            $website['Folder'] = $this->input->post('folder');
            $website['name'] = $this->input->post('name');
            $website['url'] = $this->input->post('URL');
            $website['created_at'] = date("Y-m-d H:i:s");
            $website['updated_at'] = date("Y-m-d H:i:s");

            $this->load->model("Bookmark");
            $this->Bookmark->insert($website);

            }
            else{
                $this->session->set_userdata('error',$error);
            }
            redirect('/');
        }

        public function delete($id){
            $this->load->model("Bookmark");
            $delete = $this->Bookmark->get_data($id);
            $this->load->view('bookmark/bookmark_delete',$delete);
        }

        public function confirm_delete($id = null){
            if( $this->input->post('action') == 'No'){
                redirect('/');
            }
            elseif( $this->input->post('action') == 'Yes'){
                $this->load->model("Bookmark");
                $this->Bookmark->delete($id);
                redirect('/');
            }

        }
    }
?>