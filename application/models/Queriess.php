<?php 
	/**
	 * 
	 */
	class queries extends CI_Model
	{
		
		public function getformation($idcat)
		{
			$sql="SELECT * FROM subject";
			if ($idcat!= 0) {
				$sql.=" WHERE idcategory =$idcat";
			}
			$query=$this->db->query($sql);
			if ($query->num_rows()>0) {
				return $query->result();
			}
		}
		public function getsingleformation($id)
		{
			$query = $this->db->get_where('subject', ['id' => $id]);
			if ($query->num_rows()>0 ) {
				return $query->row();
			}
		}

		public function getcategory()
		{
			$query=$this->db->get('category');
			if ($query->num_rows()>0) {
				return $query->result();
			}
		}
		public function getgalery()
		{
			$query=$this->db->get('galery');
			if ($query->num_rows()>0) {
				return $query->result();
			}
		}
		public function addEtudiant($dataEtudiant)
		{
			$this->db->insert('etudiant',$dataEtudiant);
			return $this->db->insert_id();
		}
		public function addInscription($dataInscription)
		{
			return $this->db->insert('inscription',$dataInscription);
		} 
		public function addFormInscription($dataform)
		{
			$this->db->insert('forminscrip',$dataform);
			return $this->db->insert_id();
		} 
		public function addjours($datajours)
		{
			return $this->db->insert('jours',$datajours);
		}

		public function addCustomer($arrayCustomer)
		{
			$this->db->insert('customer',$arrayCustomer);
			return $this->db->insert_id();
		}

		public function addDevis($arrayDevis)
		{
			$this->db->insert('devis',$arrayDevis);
			return $this->db->insert_id();
		}
		public function addModule($arrayModules)
		{
			return $this->db->insert('module',$arrayModules);
		}
		public function addNewsletter($dataNewsletter)
		{
			return $this->db->insert('newsletter',$dataNewsletter);
		}
		function getVisitorWhereDate($date){
        $query = $this->db->get_where('unique_visitor',array('date'=>$date));
        if($query->num_rows()>0){
            return $query->row();
        }else{
            return $query->num_rows();
        }
	    }
	    function insertIntoVisitor($data){
	        return $this->db->insert('unique_visitor',$data);
	    }
	    function updateVisitor($newIp,$date){
	        $this->db->where('date',$date);
	        $this->db->set('views','views + 1',FALSE);
	        $this->db->update('unique_visitor',array('ip'=>$newIp));
	    }
			
	}

		
 ?>