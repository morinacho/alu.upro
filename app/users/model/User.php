<?php  
	class User{
		private $db;
		
		public function __construct(){
			$this->db = new DataBase;
		}
		
		public function getUsers(){
			$this->db->query('SELECT user_document, user_name, user_lastname, user_address, user_email, user_phone FROM user');
			return $this->db->getRecords();
		}
		
		public function getUserByDocument($userDocument){
			$this->db->query('SELECT u.user_document, u.user_name, u.user_lastname, u.user_address, u.user_email, u.user_phone, u.user_address, ut.user_type_desc	
							  FROM user u
							  INNER JOIN user_type ut
							  ON u.user_type_id = ut.user_type_id
							  WHERE user_document = :document');
			$this->db->bind(':document', $userDocument);
			return $this->db->getRecord();
		}

		public function getUserId($document){
			$this->db->query('SELECT user_id FROM user WHERE user_document = :document');
			$this->db->bind(':document', $document);
			return ($this->db->getRecord())->user_id;
		}

		public function getUserByEmail($email){
			$email =  $this->db->deleteSpecialChars($email,'email'); 
			$this->db->query('SELECT user_id, user_name, user_lastname, user_password, user_email, user_status FROM  user WHERE user_email = :email');
			$this->db->bind(':email', $email);  
			return $this->db->getRecord();
		} 

		public function addUser($param){
			$document = $param['document'];
			$this->db->query('INSERT INTO user (user_name, user_lastname, user_document, user_address, user_password, user_email, user_phone, user_type_id) 
							  VALUES (:name, :lastname, :document, :address, :password, :email, :phone, :type)');
			$this->db->bind(':name', $param['name']);
			$this->db->bind(':lastname', $param['lastname']);
			$this->db->bind(':document', $param['document']);
			$this->db->bind(':address', $param['address']);
			$this->db->bind(':email', $param['email']);
			$this->db->bind(':phone', $param['phone']);
			$this->db->bind(':type', $param['type']);
			$this->db->bind(':password', $param['password']);
			
			return $this->db->execute() ? $this->getUserId($document) : NULL;
		}

		public function setUserOption($userId, $optionId){
			$this->db->query('INSERT INTO option_has_user (option_id, user_id, option_has_user_status)
							  VALUES (:optionId, :userId, :status)');
			$this->db->bind(':optionId', $optionId);
			$this->db->bind(':userId', $userId);
			$this->db->bind(':status', 1);			
			return $this->db->execute();
		}

		public function setUserAction($userId, $actionId){
			$this->db->query('INSERT INTO action_has_user (action_id, user_id, action_has_user_status)
							  VALUES (:optionId, :userId, :status)');
			$this->db->bind(':optionId', $actionId);
			$this->db->bind(':userId', $userId);
			$this->db->bind(':status', 1);			
			return $this->db->execute();
		}
	}