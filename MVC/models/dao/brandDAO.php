<?php
 class brandDAO extends DAO{

 	public function getBrandList(){

 		$sql="select * from brands";
		
		$this->openDB();
		$this->prepareQuery($sql);
		
		$result=$this->executeQuery();
		//print_r($result);
		
		return $result;

 	}

 	public function getBrandById($id){

 		$sql="select * from brands where brand_id=:id";
		
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":id", $id);
		$result=$this->executeQuery();
		//print_r($result);
		
		return $result;

 	}

 	public function insertBrand(){
 		$sql='INSERT INTO brands(brand_title) VALUES(:brand_title)';
		
		$this->openDB();
		$this->prepareQuery($sql);
		$this->bindQueryParam(":brand_title", @$_SESSION["brand"]->getBrandTitle());
		
		$this->beginTrans();
		$result=$this->executeUpdate();
	
		if($result){
			$this->commitTrans();
		}
		else $this->rollbackTrans();

		return $result;
 	}

 	public function updateBrand($id,$title)
	{
		$sql="update brands set brand_title=:title where brand_id=:id";
		
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

	public function deleteBrand($id)
	{
		$sql="delete from brands where brand_id=:id";
		
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