<?php  
	class CustomerType{
		private $db;
		
		public function __construct(){
			$this->db = new DataBase;
		}

        public function getCustomerTypes(){
            $this->db->query('SELECT customer_type_id, customer_type_desc FROM customer_type');
            return $this->db->getRecords();
        }
    }
