<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_User extends CI_Controller {
        
        public function __construct()
        {
            // CRUD harus load model
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            // Load Model
            $this->load->model('M_User');
        }

        public function index()
        {
            $this->load->view('Template/header');
            $this->load->view('User/index');
            $this->load->view('Template/footer');

        }

        public function proses_login()
        {
            // Ambil dai name form view 
            $username = $this->input->post('uname');
            $password = $this->input->post('pwd');
            // Load function model login
            $cek = $this->M_User->m_login($username, $password);

            if ($cek) {
                # code... 
                foreach($cek as $row){
                    $this->session->set_userdata('user',$row->username);
                    $this->session->set_userdata('level',$row->level);

                    if ($this->session->userdata('level')=="admin") {
                        // Menuju controller->function tujuan
                        redirect('C_Admin/index');   
                    }elseif($this->session->userdata('level')=="user"){
                        redirect('C_Admin/halaman_user');
                    }
                }                                                                               
            }else{
                redirect('C_User');
            }
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('C_User');   
        }
    
    }
    
    /* End of file Controllername.php */
    
?>