<?php 
	
	/**
	 * 
	 */
	class subject extends CI_Model
	{
		public function addSubject($dataSubject)
		{
			return $this->db->insert('subject',$dataSubject);
		}
		public function getdevis()
		{
			$req="SELECT c.nom,c.prenom,c.telephone,c.email,d.projet FROM customer c,devis d WHERE c.id=d.idcustomer" ;
			return $query=$this->db->query($req)->result();
			/*if ($query->num_rows()>0) {
				return $query->result();
			}*/
			//return $this->db->query($req);
		}
		public function getinscription()
		{
			$sql="SELECT e.nom,e.prenom,e.tel,e.email,s.title,i.dateDebut FROM etudiant e,inscription i,subject s WHERE e.id=i.idetudiant AND s.id=i.idsubject";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0) {
				return $query->result();
			}
		}
		public function getforminscription()
		{
			$sql="SELECT nom,prenom,adresse,tel,email,profession,dateDebut FROM forminscrip ";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0) {
				return $query->result();
			}
		}
	}
 ?>