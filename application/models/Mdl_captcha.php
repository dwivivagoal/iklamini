<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_captcha extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->table = array(
            'name'      => 'captcha',
            'coloumn'   => array(
                
            ),
        );
    }
    
    function getCaptcha($cap)
    {
        $data = array(
                'captcha_time'  => $cap['time'],
                'ip_address'    => $this->input->ip_address(),
                'word'          => $cap['word']
        );

        $query = $this->db->insert_string('captcha', $data);
        $this->db->query($query);
        return true;
    }
    
    function checkCaptcha($params)
    {
        // First, delete old captchas
        $expiration = time() - 7200; // Two hour limit
        $this->db->where('captcha_time < ', $expiration)
                ->delete('captcha');

        // Then see if a captcha exists:
        $sql = 'SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?';
        $binds = array($params['captcha'], $this->input->ip_address(), $expiration);
        $query = $this->db->query($sql, $binds);
        $row = $query->row();

        if ($row->count == 0)
        {
            $data = array(
                'status'    => 0,
                'msg'       => 'You must submit the word that appears in the image.'
            );
        } else {
            $data = array(
                'status'    => 1,
                'msg'       => 'Success.'
            );
        }
        return $data;
    }
}