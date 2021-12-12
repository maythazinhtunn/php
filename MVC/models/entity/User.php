<?php
class User{
	private $username;
	private $password;
	private $confrimpassword;
	private $email;
	private $phonenumber;
	public function __construct(){}
	
	public function setUserName($username){
		$this->username=$username;
	}
	public function setPassword($password){
		$this->password=$password;
	}
	public function setConfrimPassword($confirmpassword)
	{
		$this->confrimpassword=$confirmpassword;
	}
	public function setEmail($email)
	{
		$this->email=$email;
	}
	public function setPhoneNumber($phonenumber)
	{
		$this->phonenumber=$phonenumber;
	}
	public function setRegisterDate($registerdate)
	{
		$this->registerdate=$registerdate;
	}
	
	public function getUserName(){
		return $this->username;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getConfirmPassword()
	{
		return $this->confrimpassword;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function getPhoneNumber()
	{
		return $this->phonenumber;
	}
	public function getRegisterDate()
	{
		return $this->registerdate;
	}
	
}