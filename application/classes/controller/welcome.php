<?php
require_once('/Users/Francesco/pharen/lang.php');
Lexical::$scopes['welcome'] = array();
class Controller_Welcome extends Controller_Template{
			public $template = "site";


			public function action_index(){
		echo("hello_world");
		$this->template->message = "ciao";
		return FALSE;
	}
	


}
