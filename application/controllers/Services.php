<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
    public function switch_language($language = 'english') {
        // Save selected language in session
        $this->session->set_userdata('site_lang', $language);

        // Redirect back to the homepage
        redirect('/');
    }

    public function software(){
        $tooltip = "CUSTOM SOFTWARE DEVELOPMENT ";
        $this->load->view("pages/custom_software_view",['tooltip'=>$tooltip]);
    }
    public function web(){
        $tooltip = "WEB DEVELOPMENT ";
        $this->load->view("pages/web_dev_view",['tooltip'=>$tooltip]);
    }
    public function mobileapp(){
        $tooltip = "MOBILE APP DEVELOPMENT ";
        $this->load->view("pages/mobile_app_view",['tooltip'=>$tooltip]);
    }
    public function fintech(){
        $tooltip = "FINTECH SOLUTIONS ";
        $this->load->view("pages/fintech_view",['tooltip'=>$tooltip]);
    }
    public function cloud(){
        $tooltip = "CLOUD SERVICES ";
        $this->load->view("pages/cloud_view",['tooltip'=>$tooltip]);
    }
    public function uiux(){
        $tooltip = "UI UX DESIGN ";
        $this->load->view("pages/ui_ux_view",['tooltip'=>$tooltip]);
    }
    public function hiring(){
        $tooltip = "HIRE OUR EXPERTS ";
        $this->load->view("pages/hr_view",['tooltip'=>$tooltip]);
    }
}