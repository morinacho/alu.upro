<?php  
	class Coordinator{
		private $db;
		
		public function __construct(){
			$this->db = new DataBase;
		}
	}