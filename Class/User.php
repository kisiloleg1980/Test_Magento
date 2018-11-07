<?php

class AbstractUser 
{
	public $Login;
	public $Password;

	function __get($value){
		return $this->$value;
	}


	function __construct($Login, $Password)
	{
		$this->Login=$Login;
		$this->Password=$Password;
	}
}


class AuthUser extends AbstractUser
{
	public $Id;
	public $Role;	

	function getUserExist(){
		global $DB;

		$Query="SELECT id, role  FROM user_table WHERE login='$this->Login' AND Password='$this->Password';";
		$Result=$DB->query_select($Query);

		if (!empty($Result)){
			$this->Id=$Result[0]['id'];
		 	$this->Role=$Result[0]['role'];
			return true;
		}  else {
			return false;
		}
	}
}