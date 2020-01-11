<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_Admin extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_Admin');
        }
        // Admin
        // Halaman Admin
        public function index()
        {
            $data['tampil_artikel'] = $this->M_Admin->tampilData();
            if ($this->input->post('cari')) {
                $data['tampil_artikel'] = $this->M_Admin->cari_data();
            }
            $this->load->view('Template/header');
            $this->load->view('Backend/index',$data);
            $this->load->view('Template/footer');

        }
        // Tampil di  Form Tambah
        public function form_tambah()
        {
            // Untuk Load Ke Dropdown di tambah data 
            $data['genre'] = ['Horor','Urban Legend','Misteri','Mitos','Legenda'];
            // Sertakan $data untuk mengeluarkan isi arraynya
            $this->load->view('Template/header');
            $this->load->view('Backend/Tambah_data', $data);
            $this->load->view('Template/footer');
     
        }
        // Aksi Form Tambah
        public function aksi_tambah()
        {
            $this->M_Admin->tambahData();
            redirect('C_Admin');
        }

        // Detail tampil data berdasarkan ID
        public function detail_cerita($id)
        {
            $data['tampil_artikel'] = $this->M_Admin->tampilDataId($id);
            $this->load->view('Template/header');
            $this->load->view('Backend/Detail_cerita',$data);
            $this->load->view('Template/footer');

        }
        // Fungsi Tampil Halaman Edit Data
        public function form_editData($id)
        {
            $data['tampil_artikel'] = $this->M_Admin->tampilDataId($id);
            $data['genre'] = ['Horor','Urban Legend','Misteri','Mitos','Legenda'];

            $this->load->view('Template/header');
            $this->load->view('Backend/Edit',$data);
            $this->load->view('Template/footer');

        }
        // Fungsi aksi edit data (untuk button)
        public function aksi_editData()
        {
            $this->M_Admin->ubahData();
            redirect('C_Admin','refresh');
        }
        // Hapus Data 
        public function hapus_data($id)
        {
            $this->M_Admin->hapusDataId($id);
            redirect('C_Admin','refresh');

        }

        // User Fontend
        public function halaman_user()
        {
            $data['tampil_artikel'] = $this->M_Admin->tampilData();
            if ($this->input->post('cari')) {
                $data['tampil_artikel'] = $this->M_Admin->cari_data();
            }
            $this->load->view('Template/header');
            $this->load->view('Frontend/index',$data);
            $this->load->view('Template/footer');

        }

        public function detail_cerita_frontend($id)
        {
            $data['tampil_artikel'] = $this->M_Admin->tampilDataId($id);
            $this->load->view('Template/header');
            $this->load->view('Frontend/Detail_cerita',$data);
            $this->load->view('Template/footer');

        }
    
    }
    
    /* End of file C_Cerita.php */
    
?>