<?php  
	class Auth extends Controller{
		private $userModel;
		private $mainModel;

		public function __construct(){
			$this->userModel = $this->model('User','users');
			$this->mainModel = $this->model('Main','main');
			session_start(); 
		}

		public function login(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
				if(isset($_POST['user-email']) && isset($_POST['user-password'])){
					$email = $_POST['user-email'];
					$pass  = $_POST['user-password'];
					$user  = $this->userModel->getUserByEmail($email);
					
					if(!empty($user) && password_verify($pass, $user->user_password)){
						$_SESSION['username'] = "$user->user_name $user->user_lastname";
						$_SESSION['options']  = $this->mainModel->getUserOptions($user->user_id);
 						redirect('main');
					} 
					else{ 
						redirect('login');
					}
				}
				else{
					redirect('login');
				}
			}			
		}
		
		public function forgotPassword(){
			$this->view("forgot-pass");
		}

		public function logout(){
			session_unset();
        	session_destroy();
        	redirect('home');
		}
	}
