<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        
        
	public function index()
	{
            $data = array(
                'THEMES_PAGE'   => base_url('themes/'.$this->themes),
                'URL_FORM_CARI' => site_url('cari/index')
            );
            
            $data['HEADER_SECTION']     = $this->parser->parse($this->themes.'/layout/header/header', $data, true);
            
            $data['CONTENT_SECTION']    = $this->parser->parse($this->themes.'/layout/form/search', $data, true);            
            $data['BODY_SECTION']       = $this->parser->parse($this->themes.'/layout/content/body_layout', $data, true);
            $data['FOOTER_SECTION']     = $this->parser->parse($this->themes.'/layout/footer/footer', $data, true);
            
            $data['PLUGINS_CSS']        = '';
            $data['PLUGINS_SCRIPT']     = '';
            $data['ADDOIN_SCRIPT']      = '';
            
            $this->parser->parse($this->themes.'/layout/main_layout', $data);
	}
}
