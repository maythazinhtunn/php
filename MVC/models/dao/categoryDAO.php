<?php
 class categoryDAO extends DAO{

 	public function getCategoryList(){

 		$sql="select * from categories";
		
		$this->openDB();
		$this->prepareQuery($sql);
		
		$result=$this->executeQuery();
		//print_r($result);
		
		return $result;

 	}

 	public function getCategoryById($id){

 		$sql="select * from categories where cat_id=:id";
		
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":id", $id);
		$result=$this->executeQuery();
		//print_r($result);
		
		return $result;

 	}

 	public function insertCat(){
 		$sql='INSERT INTO categories(cat_title) VALUES(:cat_title)';
		
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":cat_title", @$_SESSION["category"]->getCatTitle());
		
		$this->beginTrans();
		$result=$this->executeUpdate();
	
		if($result){
			$this->commitTrans();
		}
		else $this->rollbackTrans();

		return $result;
 	}

 	public function updateCategory($id,$title)
	{
		$sql="update categories set cat_title=:title where cat_id=:id";
		
		$this->openDB();
		$this->prepareQuery($sql);
		
		$this->bindQueryParam(":id", $id);
		$this->bindQueryParam(":title",$title);		
		$this->beginTrans();
		$result=$this->executeUpdate();
		
		if($result)
			$this->commitTrans();
		else 	
			$this->rollbackTrans();

		//print_r($result);
		return $result;
	}


	public function deleteCategory($id)
	{
		$sql="delete from categories where cat_id=:id";
		
		$this->openDB();
		$this->prepareQuery($sql);
		
		$this->bindQueryParam(":id", $id);
		
		$this->beginTrans();
		$result=$this->executeUpdate();
		
		if($result)
			$this->commitTrans();
		else 	
			$this->rollbackTrans();	

		return $result;
	}

 }
?>