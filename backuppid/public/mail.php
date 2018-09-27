<?php 
use Engine\Input;
use Engine\Validate;

require_once "../document.php";
require_once DOCUMENT_ROOT."/core/init.php";

if(Input::exists()){
	$validate = new Validate();
	//$validation = $validate->check($_POST);
	if($validate->passed()){
		die("inputs are okay to continue.");
	}else{
		die("check failed");
	}	
}
?>
