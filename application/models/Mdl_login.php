<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_login extends CI_Model {
    
    function __construct() {
        parent::__construct();
        
    }
    
    function checklogin($params)
    {
        $this->db->start_cache();
        $this->db->where('user_email', $params['email']);
        $this->db->where('user_password', md5($params['password']));
        $total = $this->db->count_all_results('tbl_user');
        if ($total === 1){
            $this->db->limit(1);
            $query = $this->db->get();
            $row = $query->row();
            $data_array = array(
                'user_id'       => $row->user_id,
                'user_email'    => $row->user_email
            );
            $this->session->set_userdata($data_array);
            return true;
        } else {
            return false;
        }
        $this->db->stop_cache();
        $this->db->flush_cache();
    }
}