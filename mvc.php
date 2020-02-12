<?php
class Model
{
	public $string;

	public function __construct(){
	   $this->string = "Using PHP in MVC! Inside the model";
        }
}

class View
{
	private $model;
	private $controller;

	public function_construct($controller, $model) {
		$this->controller = $controller;
		$this->model = $model;
	}

	public function output() {
		return '<p><a> href="mvc.php?action=clicked">'.$this->model->string."</a><p>";
	}
}

class Controller
{
	public $model;
	
	public function __construct($model){
 	  $this->model = $model;
	}

	public function clicked() {
	 $this->model->string = "using the controller to update the view
        }
}

$modelmvc = new Model();
$controllermvc = new Controller($modelmvc);
$viewmvc = new View ($modelmvc,$controllermvc);
echo $viewmvc->output();

?>
