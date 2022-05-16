<?php 
	class Students extends Controller{
		private $studentModel;

		public function __construct(){
			parent::__construct();
			$this->studentModel = $this->model('Student');
		}

		public function index(){ 
            $param = [ 'students' => $this->studentModel->getStudents()];
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