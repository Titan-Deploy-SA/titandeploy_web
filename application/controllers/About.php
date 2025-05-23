<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('text');
		$this->load->model('queries');
		$this->load->helper('language');
		$this->load->library('user_agent');

		// Get language from session
		$language = $this->session->userdata('site_lang') ?: 'english';

		// Load the selected language

		$this->lang->load(['general', 'home','blog','about','contact','service'], $language);
     }


    public function index() {
        $tooltip = "ABOUT US";
        $this->load->view("pages/about_view",['tooltip'=>$tooltip]);
    }
}