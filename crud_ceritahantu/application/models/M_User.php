<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_User extends CI_Model {
    
        public function m_login($username, $password)
        {
            $data = array(
                'username' => $username,
                'password' => $password
            );

            // Ambil tabel
            $query = $this->db->get_where('user',$data);
            return $query->result();

        }
    
    }
    
    /* End of file M__User.php */
    
?>