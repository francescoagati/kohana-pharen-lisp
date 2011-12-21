<?php
require_once('/Users/Francesco/pharen/lang.php');
Lexical::$scopes['welcome2'] = array();
class Controller_Welcome2 extends Controller_Template{
			public $template = "site";


				public function action_index(){
		echo("hello_world");
		$this->template->message = "ciao2";
		return FALSE;
	}
	



}

