<?php 
	class Teachers extends Controller{
		private $teacherModel;

		public function __construct(){
			parent::__construct();
			$this->teacherModel = $this->model('Teacher');
		}

		public function index(){ 
            $param = [ 'teachers' => $this->teacherModel->getTeachers()];
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