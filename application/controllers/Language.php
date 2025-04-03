<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {
    public function switch_language($language = 'english') {
        // Save selected language in session
        $this->session->set_userdata('site_lang', $language);

        // Redirect back to the homepage
        redirect('/');
    }
}