<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $tooltip = "CONTACT";
        $this->load->view('pages/contact_view', ['tooltip' => $tooltip]);
    }

    public function sendMail()
    {
        $dataEmail = $this->input->post();


        $this->load->library('email');
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com';
        $config['smtp_user'] = 'altgrascompany@gmail.com'; // Your Gmail address
        $config['smtp_pass'] = 'xjshnapofbwhiibb'; // The app password generated above
        $config['smtp_port'] = 465;
        $config['smtp_crypto'] = 'ssl';
        $config['newline'] = "\r\n";
        $this->email->initialize($config);

        $this->email->from($dataEmail['email']);

        $email = 'contact@titandeploy.com';
        $this->email->to($email);

        $this->email->subject($dataEmail['subject']);

        $message = "Hello TitanDeploy Team,\n\n";
        $message .= "You have received a new contact request with the following details:\n\n";
        $message .= "Name: " . $dataEmail['name'] . "\n";
        $message .= "Email: " . $dataEmail['email'] . "\n";
        $message .= "Phone: " . $dataEmail['phone'] . "\n";
        $message .= "Project: " . $dataEmail['project'] . "\n";
        $message .= "Type of Project: " . $dataEmail['project_type'] . "\n";
        $message .= "Budget: " . $dataEmail['budget'] . "\n\n";
        $message .= "Message: \n" . $dataEmail['message'] . "\n\n";
        $message .= "Best regards,\n";
        $message .= "TitanDeploy Contact Form";

        $this->email->message($message);


        if ($this->email->send()) {
            $this->session->set_flashdata("msg", "L'e-mail a été envoyé avec succès,nous vous reviendrons");
        } else {
            $this->session->set_flashdata("msg", "Erreur: Aucun e-mail n'a été envoyé, vérifiez l'adresse e-mail du membre ou vérifiez si vous êtes connecté à Internet");

            show_error($this->email->print_debugger());
        }
        return redirect('contact');
        // echo "<pre>";
        // print_r($dataEmail);
    }


}