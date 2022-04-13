<?php  
	class Customer{
		private $db;
		
		public function __construct(){
			$this->db = new DataBase;
		}

		public function getCustomers(){
			$this->db->query('SELECT customer_document, customer_name, customer_lastname, customer_email, customer_phone FROM customer');
			return $this->db->getRecords();
		}

		public function getCustomerByDocument($customerDocument){
			$this->db->query('SELECT c.customer_document, c.customer_name, c.customer_lastname, c.customer_email, c.customer_phone
							  FROM customer c
							  WHERE customer_document = :document');
			$this->db->bind(':document', $customerDocument);
			return $this->db->getRecord();
		}
		
		public function getCustomerId($document){
			$this->db->query('SELECT customer_id FROM customer WHERE customer_document = :document');
			$this->db->bind(':document', $document);
			return ($this->db->getRecord())->customer_id;
		}

		public function getCustomerByEmail($email){
			$email =  $this->db->deleteSpecialChars($email,'email'); 
			$this->db->query('SELECT customer_id, customer_name, customer_lastname, customer_password, customer_email, customer_status FROM  customer WHERE customer_email = :email');
			$this->db->bind(':email', $email);  
			return $this->db->getRecord();
		}

        public function addCustomer($param){
			$document = $param['document'];
			$this->db->query("INSERT INTO customer (customer_name, customer_lastname, customer_document, customer_phone, customer_email, customer_type_id)
							  VALUES(:name, :lastname, :document, :phone, :email, :type)");
			$this->db->bind(':name', $param['name']);
			$this->db->bind(':lastname', $param['lastname']);
			$this->db->bind(':document',$document);
			$this->db->bind(':phone', $param['phone']);
			$this->db->bind(':email', $param['email']); 
			$this->db->bind(':type', $param['type']);
			$id =  $this->db->execute() ? $this->getCustomerId($document): NULL;
			
			if($id != NUlL){
				$this->db->query('INSERT INTO fiscal_key (fiscal_key_desc, customer_id)
								  VALUE (:key, :customer)');
				$this->db->bind(':key', $param['fiscal-code']);
				$this->db->bind(':customer', $id);
				return $this->db->execute();
			}
			else{return false;}

        }
	}
?>
