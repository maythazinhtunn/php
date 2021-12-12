<?php
 class Category{
 	private $cat_id;
 	private $cat_title;

 	public function __construct(){}

 	public function setCatId($cat_id){
 		$this->cat_id=$cat_id;
 	}
 	public function setCatTitle($cat_title){
 		$this->cat_title=$cat_title;
 	}
 	public function getCatId(){
 		return $this->cat_id;
 	}
 	public function getCatTitle(){
 		return $this->cat_title;
 	}
 }
?>