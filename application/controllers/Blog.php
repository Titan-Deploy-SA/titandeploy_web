<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

	}

    public function switch_language($language = 'english') {
        // Save selected language in session
        $this->session->set_userdata('site_lang', $language);

        // Redirect back to the homepage
        redirect('/');
    }

    public function index(){
        $tooltip = "BLOG";
		$this->load->view('pages/blog_view',['tooltip'=>$tooltip]);
	}
    public function detail($id_blog){ 
        
        if($id_blog == 1){
            $tooltip = "How AI is Revolutionizing Business Operations";
        }else if($id_blog == 2){
            $tooltip = "Integrating AI into Your Development Workflow";
        }else{
            $tooltip = "Supporting DevFest Guinée: Empowering Local Tech";
        }
		$this->load->view('pages/single_view',['tooltip'=>$tooltip, 'id_blog'=>$id_blog]);
	}
}