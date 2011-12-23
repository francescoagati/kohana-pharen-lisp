<?php
require_once('/Users/Francesco/pharen/lang.php');
Lexical::$scopes['welcome2'] = array();
class Controller_Welcome2 extends Controller_Template{
			public $template = "site";


				public function before(){
		echo("before");
		echo(123);
		parent::before();
		return FALSE;
	}
	



				public function after(){
		echo("after");
		echo(456);
		parent::after();
		return FALSE;
	}
	



				public function action_index(){
		$this->template->message = "ciao2";
		return FALSE;
	}
	



}

