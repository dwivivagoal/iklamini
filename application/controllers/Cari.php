<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {

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
            $this->load->model('Mdl_iklan');
        } 
        
        function index($kata='')
        {
            $data = array(
                'THEMES_PAGE'   => base_url('themes/'.$this->themes)
            );
            
            $data['IKLAN_LIST']         = $this->Mdl_iklan->getList();
                        
            $data['HEADER_SECTION']     = $this->parser->parse($this->themes.'/layout/header/header', $data, true);            
            $data['BREADCRUMBS_SECTION']= $this->parser->parse($this->themes.'/layout/header/breadcrumbs', $data, true);
            
            $data['FILTER_SECTION']     = $this->parser->parse($this->themes.'/layout/form/filter', $data, true);
            $data['MINI_ADS']           = $this->parser->parse($this->themes.'/layout/content/mini_ads', $data, true);
            
            $data['BODY_SECTION']       = $this->parser->parse($this->themes.'/layout/content/body_detail_layout', $data, true);
            $data['FOOTER_SECTION']     = $this->parser->parse($this->themes.'/layout/footer/footer', $data, true);
            
            $data['PLUGINS_CSS']        = '';
            $data['PLUGINS_SCRIPT']     = '';
            $data['ADDOIN_SCRIPT']      = '';
            
            $this->parser->parse($this->themes.'/layout/main_layout', $data);
            
            
        }
}        