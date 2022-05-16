<?php 
	class Activities extends Controller{
		private $activityModel;

		public function __construct(){
			parent::__construct();
			$this->activityModel = $this->model('Activity');
		}

		public function index(){ 
            $param = [ 'activities' => $this->activityModel->getActivities()];
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