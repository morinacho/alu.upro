<?php 
	class Settings extends Controller{
		private $settingModel;

		public function __construct(){
			parent::__construct();
			$this->settingModel = $this->model('Setting');
		}

		public function index(){ 
            $param = [ 'settings' => $this->settingModel->getSettings()];
            $this->view('index', $param);
        }

        public function general(){}
        public function account(){
            echo "HOLO";
            //$this->view('account');
        }
        public function accessibility(){}
        public function appearance(){}
        public function security(){}
	 
	}
?>