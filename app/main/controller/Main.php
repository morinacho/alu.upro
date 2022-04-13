<?php   
	class Main extends Controller{
		
		public function __construct() {
			parent::__construct();
		}

		public function index(){ 
			$this->view('index');  
		}
		
		public function cashregister(){
			$this->view('cash-register');
		}

		public function backup(){
			$this->view('backup');
		}

		public function support(){
			$this->view('support');
		}

		public function security(){
			$this->view('security');
		}

		public function settings(){
			$this->view('settings');
		}
}
