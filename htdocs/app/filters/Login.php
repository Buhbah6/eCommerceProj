<?php
namespace app\filters;

#[\Attribute]
class Login{

	function execute(){
		if(!isset($_SESSION['user_id'])){
			header('location:/Home/index');
			return true; 
		}
		return false;
	}

}