<?php 
	class Coordinators extends Controller{
		private $coordinatorModel;

		public function __construct(){
			parent::__construct();
			$this->coordinatorModel = $this->model('Coordinator');
		}

		public function index(){ 
            $param = [ 'coordinators' => $this->coordinatorModel->getCoordinators()];
            $this->view('index', $param);
        }

		public function create(){ 
			$this->view('create');
		}

		public function store(){}

		public function show(){}

		public function edit(){}

		public function update(){}

		public function delete(){}
	}
?>