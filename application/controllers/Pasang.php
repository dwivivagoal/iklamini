<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasang extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->themes = $this->config->item('themes');
    }
    
    public function index()
    {        
        $data = array(
                'WEB_TITLE'     => $this->config->item('web_title').'Platform Pasang Iklan Digital Gratis',
                'SITE_URL'      => site_url(),
                'BASE_URL'      => base_url(),                
                'THEMES_PAGE'   => base_url('themes/'.$this->themes),
                'image_captcha' => show_captcha()
            );
            
            $data['HEADER_SECTION']     = $this->parser->parse($this->themes.'/layout/header/header', $data, true);
            
            $data['BREADCRUMBS_SECTION']    = $this->parser->parse($this->themes.'/layout/header/breadcrumbs', $data, true);
            
            $data['CONTENT_SECTION']    = $this->parser->parse($this->themes.'/layout/form/pasang_iklan', $data, true);
            $data['BODY_SECTION']       = $this->parser->parse($this->themes.'/layout/content/body_layout', $data, true);
            $data['FOOTER_SECTION']     = $this->parser->parse($this->themes.'/layout/footer/footer', $data, true);
            
            $data['PLUGINS_CSS']        = '';
            $data['PLUGINS_SCRIPT']     = '';
            $data['ADDON_SCRIPT']      = $this->parser->parse($this->themes.'/layout/common/pasangiklan_script', $data, true);
            
            $this->parser->parse($this->themes.'/layout/main_layout', $data);
    }        
}            