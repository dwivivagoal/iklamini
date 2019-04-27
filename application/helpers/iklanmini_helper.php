<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('show_captcha'))
{
    function show_captcha()
    {
        $ci=& get_instance();
        //$ci->load->database(); 
        $ci->load->helper('captcha');
        $ci->load->model('Mdl_captcha');
        
        $vals = array(
            'word'          => 'dwi',
            'img_path'      => './public/images/captcha/',
            'img_url'       => base_url('public/images/captcha').'/',
            'font_path'     => FCPATH . 'themes/iklanmini/assets/fonts/ABeeZee-Regular.ttf',
            'img_width'     => 180,
            'img_height'    => 47,
            'expiration'    => 7200,
            'word_length'   => 12,
            'font_size'     => 32,
            'img_id'        => 'Imageid',
            'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

            // White background and border, black text and red grid
            'colors'    => array(
                'background' => array(229, 199, 199),
                'border' => array(255, 255, 255),
                'text' => array(1, 4, 1),
                'grid' => array(229, 199, 199)
            )
        );

        $cap = create_captcha($vals);
        
        $ci->Mdl_captcha->getCaptcha($cap);
        return $cap['image'];
    }
}    