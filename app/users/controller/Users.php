<?php 
	class Users extends Controller{
		private $userModel;

		public function __construct(){
			parent::__construct();
			$this->userModel = $this->model('User');
		}

		public function index(){
			$param = [ 'users' => $this->userModel->getUsers()];
			$this->view('index', $param);
		}

		public function create(){ 
			$this->view('create');
		}

		public function store(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register-customer'])){
				if(!empty($_POST['resource-name']) && !empty($_POST['resource-lastname']) && !empty($_POST['resource-document']) && !empty($_POST['resource-email'])){
					$password = password_hash(trim($_POST['resource-document']), PASSWORD_BCRYPT, ['cost' => 12]);
					$type = isset($_POST['check-admin']) ? 1 : 2;
					$param = [
						"name" 	   => trim($_POST['resource-name']),
						"lastname" => trim($_POST['resource-lastname']),
						"document" => trim($_POST['resource-document']),
						"email"	   => trim($_POST['resource-email']),
						"phone"	   => trim($_POST['resource-phone']),
						"address"  => trim($_POST['resource-address']),
						"password" => $password,
						"type"	   => $type
					];

					$userId =$this->userModel->addUser($param); 
					
					# Acciones habilitadas para el recurso
					$dashboard 	   = isset($_POST['check-dashboard']) ? 1 : 0;
					$cashregister  = isset($_POST['check-cash-register']) ? 1 : 0;
					$workorders    = isset($_POST['check-workorders']) ? 1 : 0;
					$workordersAdd = isset($_POST['check-workorder-add']) ? 1 : 0;
					$notices       = isset($_POST['check-notices']) ? 1 : 0;
					$noticesAdd    = isset($_POST['check-notices-create']) ? 1 : 0;
					$customer      = isset($_POST['check-customer']) ? 1 : 0;
					$customerAdd   = isset($_POST['check-customer-create']) ? 1 : 0;
					
					if($userId != NUlL){
						if($dashboard || $cashregister){
							if($this->userModel->setUserOption($userId, 1)){
								$dashboard ? $this->userModel->setUserAction($userId, 1): NULL;
								$cashregister ? $this->userModel->setUserAction($userId, 2): NULL;
							};
						}
						if($workorders || $workordersAdd){
							if($this->userModel->setUserOption($userId, 2)){
								$workorders ? $this->userModel->setUserAction($userId, 3): NULL;
								$workordersAdd ? $this->userModel->setUserAction($userId, 4): NULL;
							};
						}
						if($notices || $noticesAdd){
							if($this->userModel->setUserOption($userId, 3)){
								$notices ? $this->userModel->setUserAction($userId, 5): NULL;
								$noticesAdd ? $this->userModel->setUserAction($userId, 6): NULL;
							};
						}
						if($customer || $customerAdd){
							if($this->userModel->setUserOption($userId, 4)){
								$customer ? $this->userModel->setUserAction($userId, 7): NULL;
								$customerAdd ? $this->userModel->setUserAction($userId, 8): NULL;
							};
						}
					}
					
				} 
			}
		}

		public function show($userDocument){
			$param = [ 'user' => $this->userModel->getUserByDocument($userDocument)];
			$this->view('profile', $param);
		}

		public function edit($userDocument){
			$param = [ 'user' => $this->userModel->getUserByDocument($userDocument)];
			$this->view('edit', $param);
		}

		public function update(){}

		public function delete(){}
	}

?>