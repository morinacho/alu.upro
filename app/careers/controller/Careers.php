<?php 
	class Careers extends Controller{
		private $careerModel;

		public function __construct(){
			parent::__construct();
			$this->careerModel = $this->model('Career');
		}

		public function index(){ 
            $param = [ 'careers' => $this->careerModel->getCareers()];
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