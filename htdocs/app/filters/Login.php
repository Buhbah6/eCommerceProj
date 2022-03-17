<?php
namespace app\filters;

#[\Attribute]
class Login{

	function execute(){
		if(!isset($_SESSION['user_id'])){
			header('location:/User/index');
			return true; 
		}
		return false;
	}

}