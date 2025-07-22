<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('queries');
		$this->load->helper('language');
		$this->load->library('user_agent');

		// Get language from session
		$language = $this->session->userdata('site_lang') ?: 'french';

		// Load the selected language

		$this->lang->load(['general', 'home','blog','about','contact','service'], $language);
		


	}

	public function changeLanguage($lang = 'french')
    {
        $allowed_languages = ['english', 'french'];

        if (in_array($lang, $allowed_languages)) {
            $this->session->set_userdata('site_lang', $lang);
        }

        // Revenir à la page précédente
        redirect($this->agent->referrer() ?? 'welcome');
    }

	public function index()
	{

		$date = date('Y-m-d');
		$ip = isset($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : '127.0.0.1';
		$data = array();
		$row = $this->queries->getVisitorWhereDate($date);
		if (is_int($row) && $row == 0) {
			$data['date'] = $date;
			$data['ip'] = $ip;
			$this->queries->insertIntoVisitor($data);
		} else {
			if (!preg_match('/' . $ip . '/i', $row->ip)) {
				$newIp = $row->ip . " $ip";
				$this->queries->updateVisitor($newIp, $date);
			}
		}

		

		$this->load->view('home_view', $data);
	}
	public function contact()
	{
		$this->load->view('pages/contact');
	}
	public function realisation()
	{
		$this->load->view('pages/realisation');
	}
	public function galery()
	{
		$galery = $this->queries->getgalery();
		$this->load->view('pages/galery', ['galery' => $galery]);
	}
	public function inscrip()
	{
		$this->load->view('pages/inscrip');
	}
	public function saveForminscri()
	{
		$dataform = $this->input->post();
		$datajours = array();
		$datajours = $dataform['jours'];
		unset($dataform['jours']);
		if ($idinscrip = $this->queries->addFormInscription($dataform)) {
			foreach ($datajours as $value) {
				$day = array(
					'idinscrip' => $idinscrip,
					'jour' => $value
				);
				$this->queries->addjours($day);
			}
			$this->session->set_flashdata('msg', 'Votre inscription est reçue, nous vous reviendrons dans un bref delai ');

		} else {
			$this->session->set_flashdata('msg', 'echec d\'inscription réessayer s\'il vous plait');
		}

		return redirect('welcome/inscrip');
	}
	public function formation($idcat = 0)
	{

		$subject = $this->queries->getformation($idcat);
		$category = $this->queries->getcategory();
		$this->load->view('pages/formation', ['subject' => $subject, 'category' => $category]);

	}
	public function presentation($id, $idcat)
	{
		$subject = $this->queries->getsingleformation($id);
		$formcat = $this->queries->getformation($idcat);
		$this->load->view('pages/presentation', ['subject' => $subject, 'formcat' => $formcat]);
	}
	public function inscription($idsubject = 0)
	{
		$this->load->view('pages/inscription', ['idsubject' => $idsubject]);
	}
	public function saveInscription()
	{
		$dataEtudiant = $this->input->post();
		$dataInscription = array();
		$dataInscription['dateDebut'] = $dataEtudiant['dateDebut'];
		unset($dataEtudiant['dateDebut']);
		$dataInscription['idsubject'] = $dataEtudiant['idsubject'];
		unset($dataEtudiant['idsubject']);
		$dataInscription['lundi'] = isset($dataEtudiant['lundi']) ? 1 : 0;
		unset($dataEtudiant['lundi']);
		$dataInscription['mardi'] = isset($dataEtudiant['mardi']) ? 1 : 0;
		unset($dataEtudiant['mardi']);
		$dataInscription['mercredi'] = isset($dataEtudiant['mercredi']) ? 1 : 0;
		unset($dataEtudiant['mercredi']);
		$dataInscription['jeudi'] = isset($dataEtudiant['jeudi']) ? 1 : 0;
		unset($dataEtudiant['jeudi']);
		$dataInscription['vendredi'] = isset($dataEtudiant['vendredi']) ? 1 : 0;
		unset($dataEtudiant['vendredi']);
		$dataInscription['samedi'] = isset($dataEtudiant['samedi']) ? 1 : 0;
		unset($dataEtudiant['samedi']);
		$dataInscription['dimanche'] = isset($dataEtudiant['dimanche']) ? 1 : 0;
		unset($dataEtudiant['dimanche']);
		$dataEtudiant['created_at'] = date('Y-m-d');
		$dataInscription['created_at'] = date('Y-m-d');

		if ($idetudiant = $this->queries->addEtudiant($dataEtudiant)) {
			$dataInscription['idetudiant'] = $idetudiant;
			$this->queries->addInscription($dataInscription);
			$this->session->set_flashdata('msg', 'Votre inscription est reçu, nous vous reviendrons dans un bref delai merci!');
			$this->load->library('email');
			$config = array();
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'smtp.gmail.com';
			$config['smtp_user'] = 'altgrascompany@gmail.com';
			$config['smtp_pass'] = '(HAmidou1994)';
			$config['smtp_port'] = 465;
			$config['smtp_crypto'] = 'ssl';
			$config['newline'] = "\r\n";
			$this->email->initialize($config);


			$this->email->from('altgrascompany@gmail.com', 'ALTGRAS');

			$this->email->to($dataEtudiant['email']);

			$this->email->subject('[ALTGRAS]:inscription ');

			$this->email->message("Merci pour votre inscription !");

			if ($this->email->send()) {
				$this->session->set_flashdata("msg", "Email was sent successfully");
			} else {
				$this->session->set_flashdata("error", "Error: Email was not sent, verify the member email address Or check if you are connected to internet");

				// show_error($this->email->print_debugger());

			}
		} else {
			$this->session->set_flashdata('msg', 'echec d\'inscription, réessayer s\'il vous plait ');
		}
		return redirect('welcome/inscription');
	}
	public function devis()
	{
		$this->load->view('pages/devis');
	}
	public function saveDevis()
	{
		$arrayDevis = $this->input->post();
		$arrayModules = $arrayDevis['modules'];
		unset($arrayDevis['modules']);
		$arrayCustomer = array();
		$arrayCustomer['prenom'] = $arrayDevis['prenom'];
		unset($arrayDevis['prenom']);
		$arrayCustomer['nom'] = $arrayDevis['nom'];
		unset($arrayDevis['nom']);
		$arrayCustomer['societe'] = $arrayDevis['soc'];
		unset($arrayDevis['soc']);
		$arrayCustomer['adresse'] = $arrayDevis['adr'];
		unset($arrayDevis['adr']);
		$arrayCustomer['codePostal'] = $arrayDevis['cp'];
		unset($arrayDevis['cp']);
		$arrayCustomer['ville'] = $arrayDevis['ville'];
		unset($arrayDevis['ville']);
		$arrayCustomer['telephone'] = $arrayDevis['tel'];
		unset($arrayDevis['tel']);
		$arrayCustomer['email'] = $arrayDevis['mail'];
		unset($arrayDevis['mail']);

		if ($idCustomer = $this->queries->addCustomer($arrayCustomer)) {
			$arrayDevis['idcustomer'] = $idCustomer;
			$arrayDevis['created_at'] = date('Y-m-d H:i:s');
			if ($idDevis = $this->queries->addDevis($arrayDevis)) {
				foreach ($arrayModules as $value) {
					$module = array(
						'iddevis' => $idDevis,
						'libelle' => $value
					);
					$this->queries->addModule($module);
				}
				$this->session->set_flashdata('msg', 'Votre devis a été ajouté avec succès, nous vous reviendrons dans un bref delai ');
			} else {
				$this->session->set_flashdata('msg', 'echec d\'enregistrement du devis, réessayer s\'il vous plait ');

			}

		} else {
			$this->session->set_flashdata('msg', 'echec d\'enregistrement du client, réessayer s\'il vous plait ');

		}

		return redirect('welcome/devis');

		/*echo"<pre>";
			  echo "infos clients";
			  print_r($arrayCustomer);
			  echo "infos devis";
			  print_r($arrayDevis);
			  echo "infos modules";
			  print_r($arrayModules);*/

	}

	public function saveEmail()
	{
		$dataEmail = $this->input->post();

		$this->load->library('email');
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.gmail.com';
		$config['smtp_user'] = 'altgrascompany@gmail.com'; // Your Gmail address
		$config['smtp_pass'] = 'xjshnapofbwhiibb'; // The app password generated above
		$config['smtp_port'] = 465;
		$config['smtp_crypto'] = 'ssl'; // Use 'ssl' for port 465, or 'tls' for port 587
		$config['mailtype'] = 'html'; // Optional, use 'text' for plain text emails
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = true;
		$config['newline'] = "\r\n"; // Ensure proper line breaks

		$this->email->initialize($config);

		// $this->email->from($dataEmail['email'], $dataEmail['nom']);
		$this->email->from("hamidouyalagueya94@gmail.com", "Hamidou BAH");

		// $email = 'altgrascompany@gmail.com';
		$email = 'hamidou.bah.1238@gmail.com';
		$this->email->to($email);

		// $this->email->subject($dataEmail['objet']);
		$this->email->subject("Sujet");

		$this->email->message("Ceci est un message");

		if ($this->email->send()) {
			$this->session->set_flashdata("msg", "L'e-mail a été envoyé avec succès,nous vous reviendrons");
		} else {
			$this->session->set_flashdata("msg", "Erreur: Aucun e-mail n'a été envoyé, vérifiez l'adresse e-mail du membre ou vérifiez si vous êtes connecté à Internet");

			show_error($this->email->print_debugger());
		}
		return redirect('welcome/contact');
		/*echo"<pre>";
			  print_r($dataEmail);*/
	}
	public function newsletter()
	{
		$dataNewsletter = $this->input->post();
		$form1 = $dataNewsletter['form1'];
		unset($dataNewsletter['form1']);
		$dataNewsletter['created_at'] = date('Y-m-d H:i:s');

		if ($this->queries->addNewsletter($dataNewsletter)) {
			$this->session->set_flashdata("msg", "Merci pour votre abonnement,nous vous reviendrons");

			$this->load->library('email');
			$config = array();
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'smtp.gmail.com';
			$config['smtp_user'] = 'altgrascompany@gmail.com';
			$config['smtp_pass'] = 'HAmidou1994';
			$config['smtp_port'] = 465;
			$config['smtp_crypto'] = 'ssl';
			$config['newline'] = "\r\n";
			$this->email->initialize($config);


			$this->email->from('altgrascompany@gmail.com', 'ALTGRAS');

			$this->email->to($dataNewsletter['email']);

			$this->email->subject('[ALTGRAS]:Newsletter ');

			$this->email->message("Merci pour votre abonnement !");

			if ($this->email->send()) {
				$this->session->set_flashdata("msg", "Email was sent successfully");
			} else {
				$this->session->set_flashdata("error", "Error: Email was not sent, verify the member email address Or check if you are connected to internet");

				//  show_error($this->email->print_debugger());

			}
		} else {
			$this->session->set_flashdata("msg", "Erreur! reessayer s'il vous plait ");

		}
		if ($form1 == 'formation') {
			return redirect('welcome/formation');
		} else {
			return redirect('welcome');
		}
	}

}
