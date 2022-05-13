<?php
    class Main extends Controller{
        private $db;
		
		public function __construct(){
			$this->db = new DataBase;
        }

        public function getUserOptions($userId){
            $this->db->query('SELECT op.options_id, op.options_desc, op.options_icon, op.options_url, uo.status
                              FROM options op 
                              INNER JOIN user_has_options uo
                              ON op.options_id = uo.options_id
                              INNER JOIN user u
                              ON uo.user_id = u.user_id
                              WHERE uo.status = 1 AND u.user_id = :user_id 
            ');
            $this->db->bind(':user_id', $userId);
            $options = $this->db->getRecords(); 

            $result = array();
            foreach ($options as $option) { 
                $actions = $this->getOptionActions($option->option_id, $userId);
                array_push($result,[$option, $actions]);
            } 
           return $result;
        }

        public function getOptionActions($optionId, $userId){
            $this->db->query('SELECT ac.actions_desc, ac.actions_url, au.status
                              FROM actions ac 
                              INNER JOIN user_has_actions au
                              ON ac.actions_id = au.actions_id
                              INNER join user u
                              ON au.user_id = u.user_id
                              WHERE u.user_id = :user_id
                              AND ac.options_id = :option_id
            ');
            $this->db->bind(':user_id', $userId);
            $this->db->bind(':option_id', $optionId);
            return $this->db->getRecords(); 
        }
    }
?>