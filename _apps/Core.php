<?php

//Write your custome class/methods here
namespace Apps;

use mysqli;

class Core extends Model
{


	/** @return exit  */
	public function __construct()
	{
		parent::__construct();
	}


	public function admin_login($email, $password)
	{
		$admin_login = mysqli_query($this->dbCon, "SELECT * FROM user_table WHERE email=$email AND password=$password");
		$admin_login = mysqli_fetch_object($admin_login);
		return $admin_login;
	}

	public function Hashpass($password)
	{
		return sha1(md5($password . encrypt_salt));
	}
}
