<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

        function __construct() {
            parent::__construct();
            $this->themes = $this->config->item('themes');
            $this->load->model('Mdl_category');
        } 
        
        
	public function index()
	{
            $category = $this->Mdl_category->getListCat();
            $data = array(
                'WEB_TITLE'     => $this->config->item('web_title').'Platform Pasang Iklan Digital Gratis',
                'SITE_URL'      => site_url(),
                'BASE_URL'      => base_url(),                
                'THEMES_PAGE'   => base_url('themes/'.$this->themes),
                'URL_FORM_CARI' => site_url('cari/index')
            );
            
            $data['HEADER_SECTION']     = $this->parser->parse($this->themes.'/layout/header/header', $data, true);
            
            $data['CONTENT_SECTION']    = $this->parser->parse($this->themes.'/layout/form/search', $data, true); 
            $data['CATEGORY_LIST'][]['CATEGORY_INDEX_LIST']    = array(
                array(),
                array(),
                array()
            );
            $data['CATEGORY_LIST'][]['CATEGORY_INDEX_LIST']    = array(
                array(),
                array(),
                array()
            );
            
            $data['CONTENT_SECTION']    .= $this->parser->parse($this->themes.'/layout/content/kategori_index', $data, true);    
            $data['BODY_SECTION']       = $this->parser->parse($this->themes.'/layout/content/body_layout', $data, true);
            $data['FOOTER_SECTION']     = $this->parser->parse($this->themes.'/layout/footer/footer', $data, true);
            
            $data['PLUGINS_CSS']        = '';
            $data['PLUGINS_SCRIPT']     = '';
            $data['ADDON_SCRIPT']      = '';
            
            $this->parser->parse($this->themes.'/layout/main_layout', $data);
	}
}
