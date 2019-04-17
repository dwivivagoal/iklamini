<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_iklan extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->table = array(
            'name'      => 'tbl_iklan',
            'coloumn'   => array(
                
            ),
        );
    }
    
    function getList()
    {
        $query = $this->db->get($this->table['name']);
        foreach($query->result() as $row):
            $data[] = array(
                'title' => $row->iklan_title,
                'isi'   => $row->iklan_title,    
                'link'  => $row->iklan_link,
                'view'  => 0,
                'hits'  => 0,
            );
        endforeach;
        return $data;
    }
}