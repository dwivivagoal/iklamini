<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
        function __construct() {
            parent::__construct();
            $this->themes = $this->config->item('themes');
        } 
        
        function index($kata='')
        {
            
            $data = array(
                'WEB_TITLE'     => $this->config->item('web_title').'Platform Pasang Iklan Digital Gratis',
                'SITE_URL'      => site_url(),
                'BASE_URL'      => base_url(),       
                'URL_CHECK_LOGIN'   => site_url('login/checklogin'),
                'THEMES_PAGE'       => base_url('themes/'.$this->themes)
            );
            
            $data['HEADER_SECTION']     = $this->parser->parse($this->themes.'/layout/header/header', $data, true);
            
            $data['BREADCRUMBS_SECTION']    = $this->parser->parse($this->themes.'/layout/header/breadcrumbs', $data, true);
            
            $data['CONTENT_SECTION']        = $this->parser->parse($this->themes.'/layout/form/login', $data, true);
            $data['BODY_SECTION']           = $this->parser->parse($this->themes.'/layout/content/body_layout', $data, true);
            $data['BODY_SECTION']    .= $this->parser->parse($this->themes.'/layout/modal/loader', $data, true);
            
            $data['FOOTER_SECTION']         = $this->parser->parse($this->themes.'/layout/footer/footer', $data, true);
            
            $data['PLUGINS_CSS']        = '';
            $data['PLUGINS_SCRIPT']     = '';
            $data['ADDON_SCRIPT']      = $this->parser->parse($this->themes.'/layout/common/login_script', $data, true);
            
            $this->parser->parse($this->themes.'/layout/main_layout', $data);
            
            
        }
        
        function checklogin()
        {
            $params = $this->input->post();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
             
            if ($this->form_validation->run() == FALSE)
            {
                   $data = array(
                        'status'    => false,
                        'msg'       => 'Login Gagal :: Silahkan isi Email dan Password yang benar',
                        
                    );
             }
            else
            {
            
                $this->load->model('Mdl_login');
                $data = array();
                if ($this->Mdl_login->checklogin($params)){
                    $data = array(
                        'status'    => true,
                        'msg'       => 'Login Berhasil :: Tunggu Sebentar'
                    );
                } else {
                    $data = array(
                        'status'    => false,
                        'msg'       => 'Login Gagal :: Silahkan isi Email dan Password yang benar'
                    );
                };
            }
            
            echo json_encode($data);
        }
}        