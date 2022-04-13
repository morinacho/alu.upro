<?php
    class Main extends Controller{
        private $db;
		
		public function __construct(){
			$this->db = new DataBase;
        }

        public function getUserOptions($userId){
            $this->db->query('SELECT op.option_id, op.option_desc, op.option_icon, op.option_url
                              FROM option op 
                              INNER JOIN option_has_user ou
                              ON op.option_id = ou.option_id
                              INNER JOIN user u
                              ON ou.user_id = u.user_id
                              WHERE ou.option_has_user_status = 1 
                              AND u.user_id = :user_id 
            ');
            $this->db->bind(':user_id', $userId);
            $options = $this->db->getRecords(); 

            $result = array();
            foreach ($options as $option) { 
                $actions = $this->getOptionActions($option->option_id, $userId);
                $result[$option->option_id] = [$option, $actions];
            } 
           return $result;
        }

        public function getOptionActions($optionId, $userId){
            $this->db->query('SELECT ac.action_desc, ac.action_url
                              FROM action ac 
                              INNER JOIN action_has_user au
                              ON ac.action_id = au.action_id
                              INNER join user u
                              ON au.user_id = u.user_id
                              WHERE au.action_has_user_status = 1
                              AND u.user_id = :user_id
                              AND ac.option_id = :option_id
            ');
            $this->db->bind(':user_id', $userId);
            $this->db->bind(':option_id', $optionId);
            return $this->db->getRecords(); 
        }
    }
?>