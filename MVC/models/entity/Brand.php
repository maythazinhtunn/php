<?php
 class Brand{
 	private $brand_id;
 	private $brand_title;

 	public function __construct(){}

 	public function setBrandId($brand_id){
 		$this->brand_id=$brand_id;
 	}
 	public function setBrandTitle($brand_title){
 		$this->brand_title=$brand_title;
 	}
 	public function getBrandId(){
 		return $this->brand_id;
 	}
 	public function getBrandTitle(){
 		return $this->brand_title;
 	}
 }
?>