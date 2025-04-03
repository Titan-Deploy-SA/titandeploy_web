<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('subject');
		$this->load->model('queries');


	}
	public function index()
	{
		$this->load->view('admin/pages/accueil');
	}
	public function subject()
	{
		$categories=$this->queries->getcategory();
		$this->load->view('admin/pages/subject',['categories'=>$categories]);
	}
	public function listeSubject($idcat=0)
	{
		$formation=$this->queries->getformation($idcat);
		$this->load->view('admin/pages/listeSubject',['formation'=>$formation]);
	}
	public function saveSubject()
	{
		$dataSubject=$this->input->post();
		if ($this->subject->addSubject($dataSubject)) {
			$this->session->set_flashdata('msg','Matière ajoutée avec succès ');
		}else{
			$this->session->set_flashdata('msg','echec d\'enregistrement de la matière, réessayer s\'il vous plait ');

		}
		return redirect('admin/subject');	
		
		/*echo"<pre>";
		print_r($dataSubject);*/
		
	}
	public function devis()
	{
		$devis=$this->subject->getdevis();
		$this->load->view('admin/pages/devis',['devis'=>$devis]);
	}
	public function detail()
	{
		$this->load->view('admin/pages/detail');
	}
	public function inscription()
	{
		$inscrit=$this->subject->getinscription();
		$this->load->view('admin/pages/inscription',['inscrit'=>$inscrit]);
	}
	public function forminscrip()
	{
		$inscrip=$this->subject->getforminscription();
		$this->load->view('admin/pages/forminscrip',['inscrip'=>$inscrip]);
	}
}