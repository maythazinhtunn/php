<?php
 class userDAO extends DAO{

 	public function registerUser(){
		$sql='INSERT INTO user(username,password,confirmpassword,email,phonenumber) VALUES(:username,:password,:confirmpassword,:email,:phonenumber)';
		
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":username", @$_SESSION["User"]->getUserName());
		$this->bindQueryParam(":password", @$_SESSION["User"]->getPassword());
		$this->bindQueryParam(":confirmpassword", @$_SESSION["User"]->getConfirmPassword());
		$this->bindQueryParam(":email", @$_SESSION["User"]->getEmail());
		$this->bindQueryParam(":phonenumber", @$_SESSION["User"]->getPhoneNumber());
		
		$this->beginTrans();
		$result=$this->executeUpdate();
	
		if($result){
			$this->commitTrans();
		}
		else $this->rollbackTrans();

		return $result;
		
	}

 	public function login($email,$password){

 		$sql = "select * from user where email=:email and password=:password";
 		$this->openDB();
 		$this->prepareQuery($sql);
 		$this->bindQueryParam(":email",$email);
 		$this->bindQueryParam(":password",$password);
 		$result=$this->executeQuery();
         //print_r($result);
 		return $result;

 	}

 	public function Adminlogin($email,$password){

 		$sql = "select * from user where email=:email and password=:password and type='1'";
 		$this->openDB();
 		$this->prepareQuery($sql);
 		$this->bindQueryParam(":email",$email);
 		$this->bindQueryParam(":password",$password);
 		$result=$this->executeQuery();
         //print_r($result);
 		return $result;

 	}

 	public function viewInfo(){

 		$sql="select * from user order by user_id";
		
		$this->openDB();
		$this->prepareQuery($sql);
		
		$result=$this->executeQuery();
		//print_r($result);
		
		return $result;

 	}

 	public function viewUser($user_id)
	{
		$sql="select * from user where user_id=:user_id";
		
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":user_id", $user_id);
		$result=$this->executeQuery();
		//print_r($result);
		
		return $result;
	}

	public function updateUser($user_id)
	{
		$sql="update user set username=:username,email=:email,phonenumber=:phonenumber,registerdate=:registerdate where user_id=:user_id";
		
		$this->openDB();
		$this->prepareQuery($sql);
		
		$this->bindQueryParam(":user_id", $user_id);
		$this->bindQueryParam(":username", $_SESSION["User"]->getUserName());
		// $this->bindQueryParam(":password", $_SESSION["User"]->getPassword());
		// $this->bindQueryParam(":confirmpassword", @$_SESSION["User"]->getConfirmPassword());
		$this->bindQueryParam(":email", @$_SESSION["User"]->getEmail());
		$this->bindQueryParam(":phonenumber", @$_SESSION["User"]->getPhoneNumber());
		$this->bindQueryParam(":registerdate", @$_SESSION["User"]->getRegisterDate());
		
		$this->beginTrans();
		$result=$this->executeUpdate();
		
		if($result)
			$this->commitTrans();
		else 	
			$this->rollbackTrans();
	}

	public function deleteUser($user_id)
	{
		$sql="delete from user where user_id=:user_id";
		
		$this->openDB();
		$this->prepareQuery($sql);
		
		$this->bindQueryParam(":user_id", $user_id);
		
		$this->beginTrans();
		$result=$this->executeUpdate();
		
		if($result)
			$this->commitTrans();
		else 	
			$this->rollbackTrans();	
	}

 }

?>