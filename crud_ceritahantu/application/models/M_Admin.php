<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_Admin extends CI_Model {
        
        // Tampil semua data
        public function tampilData()
        {
            return $this->db->get('article')->result_array();
        }

        public function cari_data()
        {
            $cari=$this->input->post('cari');
            
            $this->db->like('judul',$cari);
            
            $query = $this->db->get('article');
            
            return $query->result_array();
        }

        public function tambahData()
        {
            # code...
            $data = array(
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'genre' => $this->input->post('genre'),
            );
            // Insert data/tambah data ke tabel
            $this->db->insert('article',$data);
        }

        // Model menampilkan detail data berdasarkan id
        public function tampilDataId($id)
        {
            return $this->db->get_where('article',['id' => $id])->row_array();
            $query = $this->db->get_where('article', array('id' => $id), $limit, $offset);
        }

        public function ubahData()
        {
            $data = array(
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'genre' => $this->input->post('genre'),
            );
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('article',$data);
            // print_r($data);
            // echo 'id :'.$this->input->post('id');
        }
        public function hapusDataId($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('article');
        }
    
    }
    
    /* End of file M_Admin.php */
    

?>